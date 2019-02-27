<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills",
        );
       
        return view('pages.index')->with( $headline);
    }
    public function about() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills",
        );
        
        return view('pages.about')->with($headline);
    }
    public function model_tests() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills",
        );
        return view('pages.model_tests')->with($headline);
    }
    public function teachers() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills",
        );
        return view('pages.teachers')->with( $headline );
    }
    public function students() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills",
        );
        return view('pages.students')->with( $headline );
    }
    public function blogs() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills",
        );
        return view('pages.blogs')->with($headline);
    }
    public function contact_us() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills",
        );
        return view('pages.contact_us')->with($headline);
    }
    public function login() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills"
        );
        return view('pages.login')->with( $headline);
    }
    public function sign_up() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills"
        );
        return view('pages.sign_up')->with( $headline);
    }
    // public function services() {
    //     $headline = "Services || BD Model Test";
    //     return view('pages.services')->with(
    //         'headline', $headline
    //     );
    // }
}
