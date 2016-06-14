<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShowPlanController extends Controller
{
    //
    public function index() {
        return view("PowerCutPlan");
    }

    public function firstApproval() {
        return view("FirstApproval");
    }
}
