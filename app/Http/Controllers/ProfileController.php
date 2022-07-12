<?php

namespace App\Http\Controllers;
use Session;
use App\Models\User;
use App\Models\Photo;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ProfileController extends BaseController
{
    public function profile()
    {
        if(!Session::get('user_username'))
        {
            return redirect('login');
        }

        $userid = User::find(Session::get('user_id'))->id;
        
        $array = DB::select("SELECT photosrc, name FROM photos WHERE user_id = ?", [$userid]);


        return view('profile')->with('array', $array);
        
    }

    public function delete($pics)
    {
        $userid = User::find(Session::get('user_id'))->id;

        DB::table('photos')
            ->where('user_id',$userid)
            ->where('name', $pics)
            ->delete();
    }
}