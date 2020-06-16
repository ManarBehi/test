<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{

    public function showusername (){
        return 'ahmed emam';

    }

    public function shows(){

        $obj= new \stdClass();
        $obj->name='nararesho';
        $obj->age=22;
        return view('welcome',compact('obj'));
    }
}
