<?php
namespace Home\Controller;
use Think\Controller;
class TaskListController extends Controller {
	/*首页展示*/
    public function taskList(){
        $this->show();
    }
    
    public function getTaskList(){
    	$sql = "SELECT
					*
				FROM
					task
				WHERE
					task_carrier = 0 
				HAVING
					substring(task_time, 1, 11) > ".date("Y-m-d");
    	$data = D()->query($sql);
    	echo json_encode($data);
    }

    public function getTaskDetail(){
    	$condition["task_id"] = I("get.taskId");
    	$data = D("task")->where($condition)->select();
    	echo json_encode($data);
    }
}