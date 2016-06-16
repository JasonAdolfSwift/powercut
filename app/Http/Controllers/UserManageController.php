<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Department;
use Illuminate\Support\Facades\Input;

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

    public function getApprovalUser() {
        $resData = [];

        $approvalUsers = User::where("userType", "=", 0)->get();

        $rtUsers[] = null;

        $i = 0;
        foreach ($approvalUsers as $user) {
            $rtUsers[$i] = $user->name;
            $i++;
        }

        $resData['status'] = "success";
        $resData['approvalUser'] = $rtUsers;

        return $resData;
    }

    public function getUserByDepartment() {
        $resData = [];

        $department = Input::get("department");

        $departmentRecord = Department::where("name", "=", $department)->first();

        if ($departmentRecord == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "没有该部门";

            return $resData;
        }

        $users = User::where("department", "=", $departmentRecord->id)->get();

        $resData['status'] = "success";
        $resData['users'] = $users;

        return $resData;
    }

    public function alterUserPermission() {
        $resData = [];

        $currentUserId = $_COOKIE['currentUserId'];

        $currentUser = User::find($currentUserId);

        if ($currentUser->userType != 3) {
            $resData['status'] = "failed";
            $resData['msg'] = "你没有权限进行此操作";

            return $resData;
        }

        $userId = Input::get("userId");

        $user = User::find($userId);

        if ($user == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "该用户不存在";

            return $resData;
        }

        $permission = Input::get('permission');

        $userType = null;
        if ($permission == "common") {
            $userType = 1;
        } else if ($permission == "firstApproval") {
            $userType = 0;
        } elseif ($permission == "finalApproval") {
            $userType = 2;
        } else {
            $resData['status'] = "failed";
            $resData['msg'] = "错误的请求";

            return $resData;
        }

        $user->userType = $userType;

        $user->save();

        $resData['status'] = "success";
        $resData['msg'] = "分配权限成功";

        return $resData;
    }

    public function getAllUser() {
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

        return $resData;
    }
}
