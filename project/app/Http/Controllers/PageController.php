<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;

            if ($userType == "user") {
                return view("index");
            } elseif ($userType == 'admin') {
                return view('admin.indexadmin');
            } else {
                return redirect()->back();
            }
        }
    }

    public function about()
    {
        return view("about");
    }

    public function courses()
    {
        return view("courses");
    }

    public function course()
    {
        return view("course");
    }

    public function events()
    {
        return view("events");
    }

    public function blog()
    {
        return view("blog");
    }

    public function contact()
    {
        return view("contact");
    }

    // Other page functions...

    public function blogSingle()
    {
        return view("blog-single");
    }
    public function blocks()
    {
        return view("admin.blocks");
    }
    public function indexadmin()
    {
        return view("admin.indexadmin");
    }
    public function cards()
    {
        return view("admin.cards");
    }
    public function carousels()
    {
        return view("admin.carousels");
    }
    public function forms()
    {
        return view("admin.forms");
    }
    public function viewemp()
    {
        return view("admin.viewemp");
    }
    public function people()
    {
        return view("admin.people");
    }
    public function pricing()
    {
        return view("admin.pricing");
    }
}
