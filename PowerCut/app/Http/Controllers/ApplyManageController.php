<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apply;
use App\User;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Response;

class ApplyManageController extends Controller
{
    //
    public function getApplies() {
        $userId = $_COOKIE['currentUserId'];

        $applies = Apply::where("ownerId", "=", $userId)->where("status", "=", "added")->get();

        $resData = [];
        $resData['status'] = "success";
        $resData['msg'] = "加载成功";
        $resData['applies'] = $applies;
        $resData['ownerName'] = User::find($userId)->name;

        $response = Response::make($resData, 200);
        $response->header("Access-Control-Allow-Origin:*");

        return $response;
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
}
