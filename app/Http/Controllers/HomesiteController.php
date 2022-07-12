<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Session;
use App\Models\User;
use App\Models\Photo;

class HomesiteController extends BaseController
{
    public function home()
    {
        return view('home');
    }

    public function add($pic)
    {
        if(Session::get('user_username'))
        {
            $picture = new Photo;
            $picture -> user_id = Session::get('user_id');
            $picture -> photosrc = "http://localhost:8000/pictures/" . $pic;
            $picture -> name = $pic;
            $picture -> save();
        }
        
    }
}
