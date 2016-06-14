<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apply;
use App\User;
use App\Line;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ApplyManageController extends Controller
{
    //
    public function getApplies() {
        //$userId = $_COOKIE['currentUserId'];
        $userId = 1;

        $applies = Apply::where("ownerId", "=", $userId)->get();

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

        $applyInstance->department = Input::get('department');
        $applyInstance->createTime = Input::get('createTime');
        $applyInstance->startTime = Input::get('startTime');
        $applyInstance->stopTime = Input::get('stopTime');
        $applyInstance->machineName = Input::get('mechineNmae');
        $applyInstance->lineName = Input::get('lineName');
        $applyInstance->description = Input::get('description');
        $applyInstance->comments = Input::get('comments');

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

        $lineRecord = Line::where("name", "=", $lineName);

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

        if ($applyRecord->status != "added" && $applyRecord->status != "saved") {
            $resData['status'] = "failed";
            $resData['msg'] = "该停电记录已经上报,不允许作出修改";

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
        //$userId = $_COOKIE['currentUserId'];
        $userId = 1;

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
        //$currentUserId = $_COOKIE['currentUserId'];
        $currentUserId = 3;

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

    public function showAccepted() {
        $resData = [];
        //$userId = $_COOKIE['currentUserId'];
        $userId = 1;

        $records = Apply::where("status", "=", "accept")->get();

        $resData['status'] = "success";
        $resData['applies'] = $records;
        $resData['ownerName'] = User::find($userId)->name;

        return $resData;
    }
}
