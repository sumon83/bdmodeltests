<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Registrar;

class RegistrationController extends Controller
{
    
    public function login() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills"
        );
        return view('registration.login')->with( $headline);
    }
    public function sign_up() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills"
        );
        return view('registration.sign_up')->with( $headline);
    }
    public function registrarStore(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);
        $name = $request->input('full_name');
        $post_data = [
            'name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => $request->input('password'),
            //'name' => $request->input('full_name'),
        ];
        //var_dump($post_data);die;
        $registration = new Registrar();
        
           //return request()->all();
           $registration->save($post_data);
       
        
    }
}
