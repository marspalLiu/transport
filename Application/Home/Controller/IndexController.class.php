<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	/*首页展示*/
    public function index(){
        $this->show();
    }

     public function register(){
        if ($_POST["type"] == 1) {//type==1  表示司机注册
            $driver = M("Driver"); // 实例化User对象
             // 查找driver.name 值为$_POST["name"]的用户数据
            $condition["driver_account"] =$_POST["account"];
            if($data = $driver->where($condition)->find()){
                $this->error("该账号已被注册，请重试");
            }
            $newDriver = [
                'driver_account'=> $_POST["account"],
                'driver_password'=>$_POST["password"],
                'driver_name'=>$_POST["name"],
                'driver_tel'=>$_POST["tel"],
                'driver_money'=>0
            ];
            $driver->add($newDriver);
            $this->success("注册成功");

        }
        if ($_POST["type"] == 2) {//type==2  表示货主注册
            $owner = M("Owner"); // 实例化User对象
            // 查找driver.name 值为$_POST["name"]的用户数据
            $condition["owner_account"] =$_POST["account"];
            if($data = $owner->where($condition)->find()){
                $this->error("该账号已被注册，请重试");
            }
            $newOwner = [
                'owner_account'=>$_POST["account"],
                'owner_password'=>$_POST["password"],
                'owner_name'=>$_POST["name"],
                'owner_tel'=>$_POST["tel"],
                'owner_add'=>$_POST["add"],
                'owner_money'=>0,
            ];
            $owner->add($newOwner);
            $this->success("注册成功");
        }
        return 0;

    }

      //登录功能
    public function login(){
        
        if ($_POST["type"] == 1) {//type==1  表示司机登录
            $driver = M("Driver"); // 实例化driver对象
            // 查找driver.name 值为$_POST["name"]的用户数据
            $condition["driver_account"] =$_POST["account"];
            $condition["driver_password"] =$_POST["password"];

            if($data = $driver->where($condition)->find()){
                $_SESSION["userId"]   = $data["driver_id"];
                $_SESSION["userName"] = $data["driver_name"];
                $_SESSION["type"]     = 1;
                $this->success("登录成功");
                return;
            }else{
                $this->error("账号密码错误，请重试！");
                return;
            }
            
        }
        if ($_POST["type"] == 2) {//type==2  表示货主登录
            $owner = M("Owner"); // 实例化User对象
            // 查找driver.name 值为$_POST["name"]的用户数据
            $condition["owner_account"] =$_POST["account"];
            $condition["owner_password"] =$_POST["password"];
            if($data = $owner->where($condition)->find()){
                $_SESSION["userId"] = $data["owner_id"];
                $_SESSION["userName"] = $data["owner_name"];
                $_SESSION["type"]   = 2;
                $this->success("登录成功");
                return;
            }else{
                $this->error("账号密码错误，请重试！");
                return;
            }
            
        }
        $this->error("登录失败，请重试！");

    }

    //登出方法
    public function loginOut(){
        $_SESSION = array();
        session_destroy();
        setcookie(session_name,'',time()-3600);
        $this->redirect("index");
    }

    public function getTopPriceTask(){
        $sql = "SELECT
                    *
                FROM
                    task t
                WHERE
                    t.task_carrier = 0 and substring(task_time, 1, 11) > ".date("Y-m-d");
        if ($_SESSION["userId"]) {
            $sql .= " and t.task_id NOT in(select task_id from driver_list d WHERE d.driver_id = ".$_SESSION["userId"].") ";
        }
        $sql .= " order by task_price desc";
        $sql .= " limit 0,10";
        $data = D()->query($sql);
        echo json_encode($data);
    }

    public function getAccount(){
        if ($_SESSION["type"]==1) {
            # 司机用户
            $condition["driver_id"] = $_SESSION["userId"];
            $data = D("driver")->where($condition)->select();
            echo ($data[0]["driver_money"]);
        }else{
            #货主用户
            $condition["owner_id"] = $_SESSION["userId"];
            $data = D("owner")->where($condition)->select();
            echo ($data[0]["owner_money"]);
        }
    }


}