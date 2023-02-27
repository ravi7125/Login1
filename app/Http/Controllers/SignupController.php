<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signup;
// mail veryfive

use Illuminate\Notifications\Notifiable;
use App\Notifications\WelcomeNotification;
use Illuminate\support\facades\Notification;
use Session;
use App\Models\User;


class SignupController extends Controller
{
   
    //this code auth login and registation page ....
   public function log()
   {
    return view('login');
   }
   
   public function login(Request $request)
   {
      $request->validate([
        'email' => 'required',
        'password' => 'required'
    ]);
    // login code 
    if (\Auth::attempt($request->only('email','password'))){
        return redirect('home');
   }
   return redirect('login')->witherror('login details are not valid');

}
   public function register_view()
   {
    return view('signup');
   }
   
   public function signup(Request $request)
   {
    //validate
     $request->validate([
        'name' => 'required',
        'email' =>'required|unique:signups|email',
        'password'=>'required|confirmed'
     ]); 
    // save in user table
    
    signups::create([
       'name'=>$request->name,
       'email'=>$request->email,
       'password'=> \Hash::make($request->password)
    ]);

    // logine user here
    if (\Auth::attempt($request->only('email','password'))){
         return redirect('home');
    }
    return redirect('signup')->witherror('Error');

   }
   
   public function home(){
    return view('home');
   }
   
   public function logout(){
    \session::flush();
    \Auth::logout();
    return redirect('');
   }
   
   
function data(Request $req)

    {

//perform validate code................
        $req->validate([
      
            'name'=>"required",
            'email'=>'required'
        ]);
//perform to form submit code................     
     $Signup = new Signup;
    $Signup->name=$req->name;
    $Signup->city=$req->city;
    $Signup->email=$req->email;
    $Signup->password=$req->password;
   
    $Signup->save();
    
    return redirect('Signupshow');
    
    
    }
//perform database table data show code................
    function show(){

        $data = Signup::all();

        return view('Signupshow',['data'=>$data]);
    }
//perform to delete code................

    function delete($id){

        $data=Signup::find($id);
        $data->delete();
        return redirect()->back()->with("message",'Data Deleted successfully');
    }
////perform update form code................
// function update($id){
 
//     $data = Signup::find($id);
//     return view('signupshow',['data'=>$data]);
// }
//   function updatedata(Request $req){
//     $data = Signup::find($req->id);
//     $data->name=$req->name;
//     $data->city=$req->city;
//     $data->email=$req->email;
//     $data->password=$req->password;
   
//     $data->save();
    
//     return redirect('Signupshow');
//   }
//perform to request method code................
public function index(Request $request){
    dd($request->path());

    return view ('Request');
    
   }
//perform mail notification  code................
public function mail()
   
   {
    $user = User::first();

     Notification::send($user, new Welcomenotification);
    // return view('mail');
     dd('done');
   }

public function upload(Request $request){
    dd($request->all());
}


    }


