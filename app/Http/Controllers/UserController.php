<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function index(){
        return 'Hello from UserController';
    }

    public function login(){
        if(View::exists('user.login')){
            return view('user.login');
        } else {
            return abort(404);
            //return response()->view('errors.404');
        }
        }
        
        public function register(){
            return view('user.register');
        }

 /*    public function show($id){
        $data = array(
            "id" => $id,
            "name" => "KodegoSP404",
            "age" => 19,
            "email" => "sp404@kodego.com.ph");
        // return $data;
        return view('user', $data);
    } */

    public function show($id){
        $data = ["data"=> "data from database"];
        return view('user')
        ->with('data', $data)
        ->with('name','Kodego SP404 Class')
        ->with('age','19')
        ->with('email', 'sp404@kodego.com.ph')
        ->with('id',$id);
    }
}

