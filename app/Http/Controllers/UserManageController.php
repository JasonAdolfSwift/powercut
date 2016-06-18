<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Department;
use Illuminate\Support\Facades\Input;

class UserManageController extends Controller
{
    //注册用户
    public function createUser() {
        $userName = $_POST['username'];
        $password = $_POST['password'];
        $chinese = $_POST['chinese'];
        $departmentName = $_POST['department'];

        $resData = [];

        $departmentRecord = Department::where("name", "=", $departmentName)->first();

        if ($departmentRecord == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "单位不存在,请确认单位名是否填写正确";

            return $resData;
        }

        $user = User::where("name", "=", $userName)->get();

        if (count($user) != 0) {
            $resData['status'] = "failed";
            $resData['msg'] = "用户名已存在";

            return $resData;
        }

        $newUser = new User();

        //创建用户实例,并填充属性
        $newUser->name = $userName;
        $newUser->password = $password;
        $newUser->chinese = $chinese;
        $newUser->userType = 1;
        $newUser->department = $departmentRecord->id;

        //在数据库中保存用户信息
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

    //用户登录
    public function login() {

        $userName = $_POST['username'];
        $password = $_POST['password'];
        $resData = [];

        $user = User::where("name", "=", $userName)->first();

        if ($user == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "用户不存在";

            return $resData;
        }

        if ($user->password != $password) {
            $resData['status'] = "failed";
            $resData['msg'] = "用户密码错误";

            return $resData;
        }

        $resData['status'] = "success";
        $resData['msg'] = "登录成功";

        //把当前登录用户的Id保存在cookies中
        setcookie("currentUserId", $user->id, 0, "/");

        return $resData;
    }

    //修改密码
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

        if ($userInstance == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "用户不存在";

            return $resData;
        }

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

    //获取所有具有初审权限的用户
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

    //根据部门获取用户
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

    //更改用户权限
    public function alterUserPermission() {
        $resData = [];

        //从cookie中获取当前登录用户的ID
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

    //获取所有用户(修改用户权限时展示给管理员)
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
