<?php
namespace Home\Controller;
use Think\Controller;
class AddTaskController extends Controller {
	/*添加任务*/
    public function addTask(){
        $this->show();
    }

    // 注册功能
    public function register(){
    	if ($_POST["type"] == 1) {
    		# 
    	}
    }
}