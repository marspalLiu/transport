<?php
namespace Home\Controller;
use Think\Controller;
class TaskListController extends Controller {
	/*首页展示*/
    public function taskList(){
        $this->show();
    }

    public function getTaskList(){
    	$sql = "select * FROM task where task_carrier = 0 having substring(task_time,1,11)> ".date("Y-m-d");
    	$data = D()->query($sql);
    	echo json_encode($data);
    }
}