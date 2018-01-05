<?php
namespace Home\Controller;
use Think\Controller;
class AddTaskController extends Controller {
	/*添加任务*/
    public function addTask(){
        // if (!$_SESSION["userId"] || !$_SESSION["type"]) {
        //     #判断是否登陆
        //     $this->error("登陆信息失效，请重新登陆",U('Index/index'));
        //     return ;
        // }
        $this->show();
    }

    // 添加任务
    public function addTaskFun(){
        // if (!$_SESSION["userId"] || !$_SESSION["type"]) {
        //     #判断是否登陆
        //     $this->error("登陆信息失效，请重新登陆",U('Index/index'));
        //     return ;
        // }
        if (IS_POST) {
    		if ($_FILES) {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =      './public/uploads/taskPic/'; // 设置附件上传根目录
                $upload->savePath  =      $_SESSION["owner_id"]."/"; // 设置附件上传（子）目录
                // 上传文件 
                $info   =   $upload->upload();
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功 获取上传文件信息
                    $i=1;
                    foreach ($info as $key => $value) {

                      $_POST["task_pic".$i]='/public/uploads/taskPic/'.$value['savepath'].$value['savename'];//每个上传路径重新组成数组
                      $i++;
                    }
                }
            }
            $_POST["owner_id"] = $_SESSION["owner_id"]?$_SESSION["owner_id"]:1;
            $_POST["add_time"] = date("Y-m-d H:i:s");
            $task = M("task");
            $info = $task->add($_POST);
            if ($info) {
                # 添加成功
                $this->success("发布成功");
            }else{
                $this->error("发布失败！");
            }

    	}else{
            $this->error("非法操作",U('AddTask/addTask'));
        }
    }
}