<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
   
       // return view('home');
       return redirect('dashboard');
    }

    public function dashboard()
    {
        $user= User::all()->where('id',Auth::user()->id);
        $trade= DB::table('trades')->where('user_id',Auth::user()->id)->get();
        return view('user.dashboard')->with(['users'=>$user,'trades'=>$trade ]);
    }

    public function profile()
    {
        $user= User::all()->where('id',Auth::user()->id);

        return view('user.profile')->with(['user'=>$user]);
    }

    public function deposit()
    {
        return view('user.deposit');
    }

    public function withdraw()
    {
        return view('user.withdraw');
    }

    public function withdrawing(Request $request)
    {

       
        $amount=$request->input('amount');
        $via=$request->input('via');
        $bank=$request->input('bank');

        DB::table('withdraws')->insert([
           'user_id'=>Auth::user()->id,
            'amount'=>$amount,
            'via'=>$via.'_'.$bank,
            'status'=>'requested',
            'created_at'=>Carbon::now(),

        ]);

        return redirect('dashboard');
    }

    public function upgrade()
    {
        return view('user.upgrade');
    }

    public function buy(Request $request)
    {
        $amount=$request->input('amount');
        $type=$request->input('type');
        $balance =  DB::table('users')->where('id',Auth::user()->id)->value('account_balance');

        if($balance > $amount ){
            #minus from te balance
            $current = $balance - $amount;
            #update   main account
            $current_balance =  DB::table('users')->where('id',Auth::user()->id)->update([
                    'account_balance'=>$current,
                    'message'=>'your trade is in progress'
            ]);
            #update istory set status to in  progress
            $trade=DB::table('trades')->insert([
            'user_id'=>Auth::user()->id,
            'current'=>Auth::user()->account_balance,
            'amount'=>$amount,
            'type'=>$type,
            'trade'=>'waiting...',
            'status'=>'trade in progress',
            'created_at'=>Carbon::now(),
            ]);
            return redirect('dashboard');
        }else{
            return redirect('deposit');
        }

    }









    #admin section

    public function admin()
    {
        $user= User::all();
        $trade= DB::table('trades')->get();
        $pending= DB::table('trades')->where('status','trade in progress')->get();
        $withdraw= DB::table('withdraws')->where('status','requested')->get();



        return view('admin.dashboard')->with([
            'users'=>$user,
            'trades'=>$trade,
            'pendings'=>$pending,
            'withdraws'=>$withdraw,
             ]);
    }
    public function users()
    {
        $user= User::all();
        $trade= DB::table('trades')->get();
        $pending= DB::table('trades')->where('status','trade in progress')->get();
        $withdraw= DB::table('withdraws')->where('status','requested')->get();



        return view('admin.allusers')->with([
            'users'=>$user,
            'trades'=>$trade,
            'pendings'=>$pending,
            'withdraws'=>$withdraw,
             ]);
    }

    public function payments()
    {
       
        $all= User::all();
        $user= User::all();
        $trade= DB::table('trades')->get();
        $pending= DB::table('trades')->where('status','trade in progress')->get();
        $withdraw= DB::table('withdraws')->where('status','requested')->get();



        return view('admin.payments')->with([
            
            'all'=>$all,
            'users'=>$user,
            'trades'=>$trade,
            'pendings'=>$pending,
            'withdraws'=>$withdraw,
             ]);
    }

    public function withdraws()
    {  
        $all= User::all();
        $user= User::all();
        $trade= DB::table('trades')->get();
        $pending= DB::table('trades')->where('status','trade in progress')->get();
        $withdraw= DB::table('withdraws')->where('status','requested')->get();



        return view('admin.withdraws')->with([
            'all'=>$all,
            'users'=>$user,
            'trades'=>$trade,
            'pendings'=>$pending,
            'withdraws'=>$withdraw,
             ]);
    }
     
    public  function update($user_id){
        
        $user= User::all()->where('id',$user_id);
       
        $trade= DB::table('trades')->where('id',$user_id)->get();  
          
        return view('admin.update')->with([
            'users'=>$user,
            
            
             ]);

    }

    public function new(Request $request,$user_id )
    {
        $amount=$request->input('amount');  
            #update istory set status to in  progress
            $trade=DB::table('users')->where('id',$user_id)->update([ 
            'account_balance'=>$amount,
            'message'=>'your account has been credited'
            ]);
            return redirect('update/'.$user_id);
       

    }

    public function level(Request $request,$user_id )
    {
        $level=$request->input('level');  
            #update istory set status to in  progress
            $trade=DB::table('users')->where('id',$user_id)->update([ 
            'account_level'=>$level,
            'message'=>'wow you are now in '.$level.' client do more and enjoy more'
            ]);
            return redirect('update/'.$user_id);
       

    }
    public function message(Request $request,$user_id )
    {
        $message=$request->input('message');  
            #update istory set status to in  progress
            $trade=DB::table('users')->where('id',$user_id)->update([ 
            'message'=>$message
            ]);
            return redirect('update/'.$user_id);
       

    }
    public function withdrawalmessage(Request $request,$user_id )
    {
        $message=$request->input('message');  
            #update istory set status to in  progress
            $trade=DB::table('users')->where('id',$user_id)->update([ 
            'message'=>$message
            ]);
            $trade=DB::table('withdraws')->where('id',$user_id)->update([ 
                'status'=>'messaged'
                ]);
            return redirect('admin');
       

    }

    public function credit(Request $request,$user_id,$trade_id )
    {
        $amount=$request->input('new');  
           $cash=DB::table('users')->where('id',$user_id)->value('account_balance');
            #update istory set status to in  progress
            $new= $amount+$cash;
            $credit=DB::table('users')->where('id',$user_id)->update([  
            'account_balance'=>$new,
            'message' =>'congrats your have made a returns of  $'.$new. 'USD  from your trade'
            ]);
            $returns=DB::table('trades')->where('user_id',$user_id)->where('id',$trade_id)->update([  
                'trade'=>$amount,
                'status'=>'Settled'
                ]);
            return redirect('admin');
       

    }

    public function search(Request $request)
    {
           $search=$request->input('search');  
           $users=DB::table('users')->orwhere('id',$search)->orwhere('lastname',$search)->orwhere('firstname',$search)->orwhere('name',$search)->orwhere('email',$search)->orwhere('account_balance',$search)->orwhere('account_level',$search)->get();
          
            return view('admin.find')->with(['users'=>$users]);

    }

}
