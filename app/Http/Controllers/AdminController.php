<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
   public function login(Request $required)
   {
            if($required->isMethod('post')){
                $data =  $required->input();
                    if(Auth::attempt(['username'=>$data['username'],'password'=>$data['password'],'admin'=>'1'])){
                        echo "Success"; die;
                        echo "Success"; die;
                        echo "Success"; die;
                        echo "Success"; die;
                        echo "Success"; die;

                    }else{
                        echo "Failed"; die;
                    }
            }
            return view('admin.admin_login');
    }

    public function dashboard()
    {
        return view('admin.admin_home.admin_dashboard');
    }
}
