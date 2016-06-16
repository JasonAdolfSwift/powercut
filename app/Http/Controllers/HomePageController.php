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

    public function permissionManage() {
        $resData = [];

        $currentUserId = $_COOKIE['currentUserId'];

        $currentUser = User::find($currentUserId);

        if ($currentUser->userType != 3) {
            $resData['status'] = "failed";
            $resData['msg'] = "你不是管理员,无权限查看系统用户信息";

            return $resData;
        }

        $allUser = User::where("userType", "!=", 3)->get();

        $resData['status'] = "success";
        $resData['allUser'] = $allUser;

        return view("ShowPermission",$resData);
    }

    public function test() {
        return view('welcome');
    }

    public function selection() {
        return view("selection");
    }

    public function queryPowCutRecord() {
        return view("queryByTimeOrPlace");
    }

    public function showWorkFlow() {
        return view("showWorkFlow");
    }
}
