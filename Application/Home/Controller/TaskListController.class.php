<?php
namespace Home\Controller;
use Think\Controller;
class TaskListController extends Controller {
	/*首页展示*/
    public function taskList(){
        // echo json_encode($_GET);
        $this->assign("param",$_GET);
        $this->show();
    }
    
    //获取全部任务列表
    public function getTaskList(){
    	$sql = "SELECT
					*
				FROM
					task t
				WHERE
					t.task_carrier = 0";
		if ($_SESSION["userId"]) {
			$sql .= " and t.task_id NOT in(select task_id from driver_list d WHERE d.driver_id = ".$_SESSION["userId"].") ";
		}

        if ($_GET["task_title"]) {
            $sql .= " and task_title like '%".$_GET["task_title"]."%'";
        }
        if ($_GET["task_start"]) {
            $sql .= " and task_start like '%".$_GET["task_start"]."%'";
        }
        if ($_GET["task_end"]) {
            $sql .= " and task_end like '%".$_GET["task_end"]."%'";
        }
				
		$sql .= " HAVING
					substring(task_time, 1, 11) > ".date("Y-m-d");
		$data = D()->query($sql);
    	echo json_encode($data);
    }

    //获取任务详情
    public function getTaskDetail(){
    	$condition["task_id"] = I("get.taskId");
    	$data = D("task")->where($condition)->select();
    	echo json_encode($data);
    }

    //承运货物
    public function affirmCarry(){
    	if (!$_SESSION["userId"]) {
    		#判断是否登陆
            echo "nologinIn";
            return ;
    	}
    	$condition["task_id"] = $data["task_id"]   = I("get.taskId");
    	$condition["driver_id"] = $data["driver_id"] = $_SESSION["userId"];
    	$data["add_time"]  = date("Y-m-d H:i:s");
    	$info = D("driver_list")->where($condition)->select();
    	if($info){
    		echo "haveAffirm";
    	}else{
    		$info = D("driver_list")->add($data);
    		if($info){
    			echo "success";
    		}else{
    			echo "fail";
    		}
    	}
 	}
}