<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserManageController extends Controller
{
    //

    public function createUser() {
        $userName = $_POST['username'];
        $password = $_POST['password'];

        $resData = [];

        $user = User::where("name", "=", $userName)->get();

        if (count($user) != 0) {
            $resData['status'] = "failed";
            $resData['msg'] = "用户名已存在";

            return $resData;
        }

        $newUser = new User();

        $newUser->name = $userName;
        $newUser->password = $password;
        $newUser->userType = 1;

        if($newUser->save()) {
            $resData['status'] = "success";
            $resData['msg'] = "注册成功";
            $resData['url'] = "/";

            return $resData;
        } else {
            $resData['status'] = "failed";
            $resData['msg'] = "注册失败";

            return $resData;
        }
    }

    public function login() {

        $userName = $_POST['username'];
        $password = $_POST['password'];
        $resData = [];

        $user = User::where("name", "=", $userName)->get();

        if (count($user) == 0) {
            $resData['status'] = "failed";
            $resData['msg'] = "用户不存在";

            return $resData;
        }

        if ($user[0]->password != $password) {
            $resData['status'] = "failed";
            $resData['msg'] = "用户密码错误";

            return $resData;
        }

        $resData['status'] = "success";
        $resData['msg'] = "登录成功";
        setcookie("currentUserId", $user[0]->id, 0, "/");

        return $resData;
    }

    public function alterPassword() {
        $resData = [];

        $userName = $_POST['username'];
        $oldPassword = $_POST['password'];
        $newPassword = $_POST['newPassword'];

        if ($oldPassword == $newPassword) {
            $resData['status'] = "failed";
            $resData['msg'] = "新密码和原密码不能相同";

            return $resData;
        }

        $userInstance = User::where("name", "=", $userName)->first();

        if ($oldPassword != $userInstance->password) {
            $resData['status'] = "failed";
            $resData['msg'] = "原密码错误";

            return $resData;
        }

        $userInstance->password = $newPassword;

        $userInstance->save();

        $resData['status'] = "success";
        $resData['msg'] = "修改成功";

        return $resData;
    }
}
