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

    public function getSubmitPlan() {
        return view("SubmitPlan");
    }

    public function getFinalApproval() {
        return view("SecondApproval");
    }

    public function getNotify() {
        return view("Notify");
    }
}
