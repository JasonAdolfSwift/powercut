<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apply;
use App\User;
use App\Line;
use App\Department;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ApplyManageController extends Controller
{
    //获取状态为added的所有记录
    public function getApplies() {
        $userId = $_COOKIE['currentUserId'];

        $applies = Apply::where("status", "=", "added")->get();

        $resData = [];
        $resData['status'] = "success";
        $resData['msg'] = "加载成功";
        $resData['applies'] = $applies;
        $resData['ownerName'] = User::find($userId)->name;

        return $resData;
    }

    //add一条记录
    public function addApply() {
        $resData = [];

        $applyInstance = new Apply();

        $departmentName = Input::get('department');
        $departmentName=trim($departmentName);

        $applyInstance->department = $departmentName;
        $applyInstance->createTime = Input::get('createTime');
        $applyInstance->startTime = Input::get('startTime');
        $applyInstance->stopTime = Input::get('stopTime');
        $applyInstance->machineName = Input::get('mechineNmae');
        $applyInstance->lineName = Input::get('lineName');
        $applyInstance->description = Input::get('description');
        $applyInstance->comments = Input::get('comments');

        $departmentRecord = Department::where("name", "=", $applyInstance->department)->first();

        if ($departmentRecord == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "部门不存在,请确认部门是否填写正确";

            return $resData;
        }

        $owner = User::where("name", "=", Input::get('owner'))->first();

        if ($owner == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "负责人不存在";

            return $resData;
        }

        $applyInstance->ownerId = $owner->id;

        $applyUser = User::where("name", "=", Input::get('applyUser'))->first();

        if ($applyUser == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "填报人不存在";

            return $resData;
        }

        $lineName = Input::get('lineName');

        $lineRecord = Line::where("name", "=", $lineName)->first();

        if ($lineRecord == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "您所填写的线路不存在";

            return $resData;
        }

        $applyInstance->area = $lineRecord->line_area;

        $applyInstance->applyUserId = $applyUser->id;

        $applyInstance->status = "added";

        $applyInstance->save();

        $resData['status'] = "success";
        $resData['msg'] = "添加成功";

        return $resData;
    }

    //保存记录
    public function saveApply() {
        $resData = [];

        $applyId = Input::get('applyId');

        $applyRecord = Apply::where("id", "=", $applyId)->first();

        if ($applyRecord == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "没有找到相关记录";

            return $resData;
        }

        $applyRecord->status = "saved";

        $applyRecord->save();

        $resData['status'] = "success";
        $resData['msg'] = "保存成功";

        return $resData;
    }

    //更新记录
    public function updateApply() {
        $resData = [];

        $applyId = Input::get('applyId');

        $applyRecord = Apply::where("id", "=", $applyId)->first();

        if ($applyRecord == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "没有找到相关纪录";

            return $resData;
        }

        $applyRecord->department = Input::get('department');
        $applyRecord->createTime = Input::get('createTime');
        $applyRecord->startTime = Input::get('startTime');
        $applyRecord->stopTime = Input::get('stopTime');
        $applyRecord->machineName = Input::get('mechineNmae');
        $applyRecord->lineName = Input::get('lineName');
        $applyRecord->description = Input::get('description');
        $applyRecord->comments = Input::get('comments');

        $owner = User::where("name", "=", Input::get('owner'))->first();

        if ($owner == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "负责人不存在";

            return $resData;
        }

        $applyRecord->ownerId = $owner->id;

        $applyUser = User::where("name", "=", Input::get('applyUser'))->first();

        if ($applyUser == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "填报人不存在";

            return $resData;
        }

        $applyRecord->applyUserId = $applyUser->id;

        $applyRecord->save();

        $resData['status'] = "success";
        $resData['msg'] = "修改成功";

        return $resData;
    }

    public function deleteApply() {
        $resData = [];

        $applyId = Input::get('applyId');

        $applyRecord = Apply::where("id", "=", $applyId)->first();

        if ($applyRecord == null) {
            $resData['status'] = "success";
            $resData['msg'] = "删除成功";

            return $resData;
        }

        if ($applyRecord->status != "added" && $applyRecord->status != "saved") {
            $resData['status'] = "failed";
            $resData['msg'] = "该停电记录已经上报,不允许删除";

            return $resData;
        }

        $applyRecord->delete();

        $resData['status'] = "success";
        $resData['msg'] = "删除成功";

        return $resData;
    }

    public function showSaved() {
        $resData = [];
        $userId = $_COOKIE['currentUserId'];

        $records = Apply::where("status", "=", "saved")->get();

        $resData['status'] = "success";
        $resData['applies'] = $records;
        $resData['ownerName'] = User::find($userId)->name;

        return $resData;
    }

    public function alterSavedApply() {
        $resData = [];

        $applyId = Input::get('applyId');

        $description = Input::get('description');
        $comments = Input::get('comments');

        $applyRecord = Apply::where("id", "=", $applyId)->first();

        if ($applyRecord == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "没有找到该记录";

            return $resData;
        }

        $applyRecord->description = $description;
        $applyRecord->comments = $comments;

        $applyRecord->save();

        $resData['status'] = "success";
        $resData['msg'] = "修改成功";

        return $resData;
    }

    public function firstApprovalApply() {
        $resData = [];

        $applyIds = Input::get('applyIds');
        $currentUserId = $_COOKIE['currentUserId'];

        $user = User::find($currentUserId);

        if ($user->userType != 0) {
            $resData['status'] = "failed";
            $resData['msg'] = "您没有权限审批";

            return $resData;
        }

        $userName = Input::get('approvalUserName');

        $userRecord = User::where("name", "=", $userName)->first();

        if ($userRecord == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "用户不存在";

            return $resData;
        }

        $applyRecords = Apply::whereIn("id", $applyIds)->get();

        if (count($applyRecords) == 0) {
            $resData['status'] = "failed";
            $resData['msg'] = "没有找到该记录";

            return $resData;
        }

        //如果用户身份不是初审人员,不允许审批
        if ($userRecord->userType != 0) {
            $resData['status'] = "failed";
            $resData['msg'] = "您没有权限审批";

            return $resData;
        }

        foreach ($applyRecords as $applyRecord) {
            $applyRecord->approvalUserId = $userRecord->id;
            $applyRecord->status = "accept";

            $applyRecord->save();
        }

        $resData['status'] = "success";
        $resData['msg'] = "审批通过";

        return $resData;
    }

    //展示状态为accept的记录
    public function showAccepted() {
        $resData = [];
        $userId = $_COOKIE['currentUserId'];

        $records = Apply::whereRaw("status = 'reject' or status = 'accept' ")->get();

        $resData['status'] = "success";
        $resData['applies'] = $records;
        $resData['ownerName'] = User::find($userId)->name;

        return $resData;
    }

    //修改状态为reject和accept的记录
    public function alterAcceptedApply() {
        $resData = [];

        $userId = $_COOKIE['currentUserId'];

        $user = User::find($userId);

        if ($user->userType != 0) {
            $resData['status'] = "failed";
            $resData['msg'] = "您没有权限进行此操作";

            return $resData;
        }

        $applyId = Input::get('applyId');

        $applyRecord = Apply::where('id', '=', $applyId)->first();

        if ($applyRecord == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "没有找到相关记录";

            return $resData;
        }

        $applyRecord->department = Input::get('department');
        $applyRecord->createTime = Input::get('createTime');
        $applyRecord->startTime = Input::get('startTime');
        $applyRecord->stopTime = Input::get('stopTime');
        $applyRecord->machineName = Input::get('machineName');
        $applyRecord->lineName = Input::get('lineName');
        $applyRecord->description = Input::get('description');
        $applyRecord->comments = Input::get('comments');
        $applyRecord->area = Input::get('area');

        $owner = User::where("name", "=", Input::get('ownerName'))->first();

        if ($owner == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "负责人不存在";

            return $resData;
        }

        $applyRecord->ownerId = $owner->id;

        $applyRecord->save();

        $resData['status'] = "success";
        $resData['msg'] = "修改成功";

        return $resData;
    }

    public function submitApply() {
        $resData = [];

        $userId = $_COOKIE['currentUserId'];

        $user = User::find($userId);

        if ($user->userType != 0) {
            $resData['status'] = "failed";
            $resData['msg'] = "您没有权限进行此操作";

            return $resData;
        }

        $applyId = Input::get("applyId");

        $applyRecord = Apply::where("id", "=", $applyId)->first();

        if ($applyRecord == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "提交失败,没有找到相关记录";

            return $resData;
        }

        $applyRecord->status = "submited";

        $applyRecord->save();

        $resData['status'] = "success";
        $resData['msg'] = "提交成功";

        return $resData;
    }

    public function deleteSubmitedAppply() {
        $resData = [];

        $userId = $_COOKIE['currentUserId'];

        $user = User::find($userId);

        if ($user->userType != 0) {
            $resData['status'] = "failed";
            $resData['msg'] = "您没有权限进行此操作";

            return $resData;
        }

        $applyId = Input::get("applyId");

        $applyRecord = Apply::where("id", "=", $applyId)->first();

        $applyRecord->delete();

        $resData['status'] = "success";
        $resData['msg'] = "删除成功";

        return $resData;
    }

    //查看所有状态为submited的记录
    public function showSecondSaved() {
        $resData = [];

        $userId = $_COOKIE['currentUserId'];

        $applies = Apply::where("status", "=", "submited")->get();

        $resData['status'] = "success";
        $resData['applies'] = $applies;
        $resData['ownerName'] = User::find($userId)->name;

        return $resData;
    }

    //二次审批
    public function finalApproval() {
        $resData = [];

        $userId = $_COOKIE['currentUserId'];

        $user = User::find($userId);

        if ($user->userType != 2) {
            $resData['status'] = "failed";
            $resData['msg'] = "您没有权限审批";

            return $resData;
        }

        $applyId = Input::get("applyId");

        $applyRecord = Apply::where("id", "=", $applyId)->first();

        if ($applyRecord == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "没有找到该记录";

            return $resData;
        }

        $operation = Input::get("operation");

        if ($operation == "true") {
            $operation = "approval";
        } else if ($operation == "false") {
            $operation = "reject";
        } else {
            $resData['status'] = "false";
            $resData['msg'] = "系统错误";

            return $resData;
        }

        $applyRecord->status = $operation;
        $applyRecord->haveApproved = 1;
        $applyRecord->finalApprovalId = $userId;

        $applyRecord->save();

        $resData['status'] = "success";
        $resData['msg'] = "审批操作成功";

        return $resData;
    }
//通知用户界面
    public function showApproved() {
        $resData = [];

        $userId = $_COOKIE['currentUserId'];

        $applies = Apply::where("status", "=", "approval")->get();

        $resData['status'] = "success";
        $resData['applies'] = $applies;
        $resData['ownerName'] = User::find($userId)->name;

        return $resData;
    }

    public function setNotify() {
        $resData = [];

        $userId = Input::get("userId");

        $user = User::find($userId);

        if ($user == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "该用户不存在";

            return $resData;
        }

        $applyId = Input::get("applyId");

        $applyRecord = Apply::find($applyId);

        if ($applyRecord == null) {
            $resData['status'] = "failed";
            $resData['msg'] = "该记录不存在";

            return $resData;
        }

        $applyRecord->notifyUserId = $user->id;
        $applyRecord->status = "notified";

        $applyRecord->save();

        $resData['status'] = "success";
        $resData['msg'] = "通知成功";

        return $resData;
    }

    //根据时间或地点查询记录
    public function queryByPlaceOrTime() {
        $resData = [];

        $userId = $_COOKIE['currentUserId'];

        $type = Input::get('type');
        $param = Input::get('param');

        if ($type != "place" && $type != "time") {
            $resData['status'] = "failed";
            $resData['msg'] = "错误的查询方式";

            return $resData;
        }

        $applies = null;
        if ($type == "place") {
            $applies = Apply::where("area", "LIKE", "%$param%")->where("status", "=", "notified")->get();
        } else if ($type == "time") {
            $applies = Apply::where("startTime", "LIKE", "%$param%")->where("status", "=", "notified")->get();
        }

        $resData['status'] = "success";
        $resData['applies'] = $applies;
        $resData['count'] = count($applies);
        $resData['ownerName'] = User::find($userId)->chinese;

        return $resData;
    }
}
