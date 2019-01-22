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
        $headline = "About Us || BD Model Test";
        return view('pages.about')->with(
            'headline', $headline
        );
    }
    public function services() {
        $headline = "Services || BD Model Test";
        return view('pages.services')->with(
            'headline', $headline
        );
    }
}
