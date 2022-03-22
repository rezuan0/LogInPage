<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class LogInAndRegistrationController extends Controller
{

    public function goToLogInPage(){
        return view('logInPage');
    }

    public function goToRegistrationPage(){
        return view('registration');
    }



    /* Register a new user */
    public function userRegistered(Request $request){
        $request->validate([
            'name' => 'required|string|min:1|max:100',
            'email' => 'required|string|min:1|max:100|unique:accounts',
            'pass' => 'required|string|min:1|max:10',
            'conPass' => 'required|string|min:1|max:5'
        ]);

        $user=new Account();

        $user->fullName=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->pass);
        $user->cPassword=Hash::make($request->conPass);

        if($request->password == $request->cPassword){
            $user->save();
            echo '<script>window.confirm("Account create Successfully");</script>';
            return view('logInPage');
        }
        else{
            echo '<script>window.alert("Wrong Pass");</script>';
            return view('registration');
        }
        //return view('newAcSuccessful',['name'=>$uName]);*/
    }




    /* Log in a user */
    public function userLogIn(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $users = Account::where('email', '=', $request->email)->first();

        if($users){
            if(Hash::check($request->password, $users->password)){
                $request->session()->put('logIn', $users->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail', 'Wrong Password !!!');
            }
        }else{
            return back()->with('fail', 'Email not registered!!!');
        }
    }


    /* MiddleWare */
    public function dashboard(){
        $data = array();
        if(Session::has('logIn')){
            $data = Account::where('id', '=', Session::get('logIn'))->first();
        }
        return view('dashboard', compact('data'));
    }

/* log Out a User */
    public function userLogOut(){;
        if(Session::has('logIn')){
            Session::pull('logIn');
            return redirect('/');
        }

    }


}


