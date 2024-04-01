<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($name = null)
    {
        if ($name == null) {
            return "This is home controller";
        } else {
            return "This is home controller. And name is " . $name;
        }
    }

    public function blog()
    {
        return "This is blog page";
    }
}
