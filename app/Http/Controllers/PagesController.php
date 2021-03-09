<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "Welcome to Laravel Classes";
        return view("pages/index", ["title" => $title]);
    }

    public function about() {
        $title = "About us";
        return view("pages/about", ["title" => $title]);
    }

    public function services() {
        $data = array(
            "title" => "Services",
            "services" => ["Web Design", "Programming", "SEO"],
        );

        return view("pages/services") -> with($data);
    }
}