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
/*        $user->password=$request->pass;
        $user->cPassword=$request->conPass;*/
        $user->password=Hash::make($request->pass);
        $user->cPassword=Hash::make($request->conPass);

        $user->save();
//        return view('logInPage');
        echo "Account Create Successfully";


        //return view('newAcSuccessful',['name'=>$uName]);*/
    }

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


    public function dashboard(){
        $data = array();
        if(Session::has('logIn')){
            $data = Account::where('id', '=', Session::get('logIn'))->first();
        }
        return view('dashboard', compact('data'));
    }


    public function userLogOut(){;
        if(Session::has('logIn')){
            Session::pull('logIn');
            return redirect('/');
        }

    }

}
