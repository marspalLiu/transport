<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	/*首页展示*/
    public function index(){
        $this->show();
    }

    // 注册功能
    public function register(){
    	if ($_POST["type"] == 1) {
    		# 
    	}
    }
}