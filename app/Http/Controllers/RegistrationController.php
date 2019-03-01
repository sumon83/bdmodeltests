<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function registrar()
    {
        return "registration page";
    }
}
