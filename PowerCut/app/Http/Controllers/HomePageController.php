<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class HomePageController extends Controller
{
    //
    public function start() {
        return view('Login');
    }

    public function register() {
        return view("register");
    }

    public function showAlterPassword() {
        return view("alterPassword");
    }

    public function test() {
        return view("MakePowerCutPlan");
    }
}
