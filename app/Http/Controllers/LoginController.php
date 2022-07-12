<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;

class LoginController extends BaseController
{
    public function register_form()
    {
        if(Session::get('user_username'))
        {
            return redirect('home');
        }
        $error = Session::get('error');
        Session::forget('error');
        return view('register')->with('error', $error);
    }

    public function do_register()
    {
        if(Session::get('user_username'))
        {
            return redirect('home');
        }
        
        if(strlen(request('nome')) == 0 || strlen(request('cognome')) == 0 || strlen(request('username')) == 0 
        || strlen(request('email')) == 0 || strlen(request('password')) == 0)
        {
            Session::put('error', 'empty_fields');
            return redirect('register')->withInput();
        }
        else if(User::where('username', request('username'))->first())
        {
            Session::put('error', 'existing');
            return redirect('register')->withInput();
        }
        else if(strlen(request('password')) < 8)
        {
            Session::put('error', 'bad_password');
            return redirect('register')->withInput();
        }

        
        $user = new User;
        $user -> nome = request('nome');
        $user -> cognome = request('cognome');
        $user -> username = request('username');
        $user -> email = request('email');
        $user -> password = password_hash(request('password'), PASSWORD_BCRYPT);
        $user ->save();

        
        Session::put('user_id', $user->id); 
        Session::put('user_username', $user->username);  
        

        
        return redirect('home');
    }






    public function login_form()
    {
        if(Session::get('user_username'))
        {
            return redirect('home');
        }
        $error = Session::get('error');
        Session::forget('error'); 
        return view('login')->with('error', $error);
    }

    public function do_login()
    {
        if(Session::get('user_username'))
        {
            return redirect('home');
        }
        
        if(strlen(request('username')) == 0 || strlen(request('password')) == 0)
        {
            Session::put('error', 'empty_fields');
            return redirect('login')->withInput();
        }

        $user = User::where('username', request('username'))->first();
        if(!$user || !password_verify(request('password'), $user->password))
        {
            Session::put('error', 'wrong');
            return redirect('login')->withInput();
        }

        
        Session::put('user_id', $user->id);
        Session::put('user_username', $user->username);   

        
        return redirect('home');
    }

    public function logout(){
        
        Session::flush();
        return redirect('login');
    }
}
