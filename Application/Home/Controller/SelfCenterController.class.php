<?php
namespace Home\Controller;
use Think\Controller;
class SelfCenterController extends Controller {
	/*首页展示*/
    public function selfCenter(){
        $this->show();
    }

    //我的车辆页面
    public function myCar(){

        $this->show();
    }

    public function carList(){
     $sql = "SELECT
					*
				FROM
					car
				WHERE
					driver_id = ".$_SESSION["userId"]
				;
        $data = D()->query($sql);
        echo  json_encode($data);

    }

    //申请
    public function applying(){

        $this->show();
    }

    public function applyingList(){
        $sql = "SELECT
					t.task_id,t.owner_id,t.task_title,t.task_describe,t.task_type,t.task_price,t.task_start,t.task_end,t.task_pic1,t.task_pic2,t.task_pic3,t.task_pic4,
					t.task_time,t.add_time
				FROM
					driver_list d , task t
				WHERE
				d.task_id= t.task_id and
					d.driver_id = ".$_SESSION["userId"]."  and d.status = 0
				";
        $data = D()->query($sql);
        echo json_encode($data);
    }

    public function done(){
        $this->show();
    }

    public function  doneList(){
        $sql = "SELECT
					t.task_id,t.owner_id,t.task_title,t.task_describe,t.task_type,t.task_price,t.task_start,t.task_end,t.task_pic1,t.task_pic2,t.task_pic3,t.task_pic4,
					t.task_time,t.add_time
				FROM
					driver_list d , task t
				WHERE
				d.task_id= t.task_id and
					d.driver_id = ".$_SESSION["userId"]."  and d.status >= 4
				";
        $data = D()->query($sql);
        echo json_encode($data);
    }

    public function waittrans(){

        $this->show();
    }

    public  function  waittransList(){
        $sql = "SELECT
					t.task_id,t.owner_id,t.task_title,t.task_describe,t.task_type,t.task_price,t.task_start,t.task_end,t.task_pic1,t.task_pic2,t.task_pic3,t.task_pic4,
					t.task_time,t.add_time
				FROM
					driver_list d , task t
				WHERE
				d.task_id= t.task_id and
					d.driver_id = ".$_SESSION["userId"]."  and d.status = 1
				";
        $data = D()->query($sql);
        echo json_encode($data);
    }

    public function  makeTransing(){
        $User = M("driver_list"); // 实例化User对象
        // 要修改的数据对象属性赋值

        $User->status = '3';
        $User->where('driver_id='.$_SESSION["userId"].' and task_id = '.$_POST["id"] )->save(); // 根据条件更新记
      
    }
    public function  makeDone(){
        $User = M("driver_list"); // 实例化User对象
        // 要修改的数据对象属性赋值

        $User->status = '4';
        $User->where('driver_id='.$_SESSION["userId"].' and task_id = '.$_POST["id"] )->save(); // 根据条件更新记

    }
    public function transing(){
        $this->show();
    }

    public  function transingList(){
        $sql = "SELECT
					t.task_id,t.owner_id,t.task_title,t.task_describe,t.task_type,t.task_price,t.task_start,t.task_end,t.task_pic1,t.task_pic2,t.task_pic3,t.task_pic4,
					t.task_time,t.add_time
				FROM
					driver_list d , task t
				WHERE
				d.task_id= t.task_id and
					d.driver_id = ".$_SESSION["userId"]."  and d.status = 3
				";
        $data = D()->query($sql);
        echo json_encode($data);
    }

    public function getTaskList(){
        $sql = "SELECT
					t.task_id,t.owner_id,t.task_title,t.task_describe,t.task_type,t.task_price,t.task_start,t.task_end,t.task_pic1,t.task_pic2,t.task_pic3,t.task_pic4,
					t.task_time,t.add_time
				FROM
					driver_list d , task t
				WHERE
				d.task_id= t.task_id and
					d.driver_id = ".$_SESSION["userId"]."  and d.status != 5
				";
        $data = D()->query($sql);
        echo json_encode($data);
    }

    public function getTaskDetail(){
        $condition["task_id"] = I("get.taskId");
        $data = D("task")->where($condition)->select();
        echo  $data["task_type"];
        if($data["task_type"]=="2")
        {
            $data["task_type"]="dsf";
        }
        echo json_encode($data);
    }

    public function addCar(){
        $id = $_POST["id"];
        $weight =$_POST["weight"];
        $length =$_POST["length"];
        $width =$_POST["width"];

        //上传车辆照片
        if ($_FILES) {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =      './public/uploads/car/'; // 设置附件上传根目录
                $upload->savePath  =      $_SESSION["userId"]."/"; // 设置附件上传（子）目录
                // 上传文件 
                $info   =   $upload->upload();
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功 获取上传文件信息
                    $_POST["car_pic"]='/public/uploads/car/'.$info["car_pic"]['savepath'].$info["car_pic"]['savename'];//每个上传路径重新组成数组
                    
                }
            }
        
        //添加车辆
        $car = M("car"); // 实例化User对象
        // 查找car.no 值为$_POST["id"]的用户数据
        $condition["car_no"] =$id;
        if($data = $car->where($condition)->find()){
            $this->error("该车辆已被注册，请重试");
        }
        $newCar = [
            'driver_id'=>$_SESSION["userId"],
            'car_no'=> $id,
            'car_weight'=>$weight,
            'car_length'=>$length,
            'car_width'=>$width,
            'car_pic'=>$_POST["car_pic"]
        ];

        $car->add($newCar);
        $this->success("添加成功");
    }

    //删除车辆
    function deleteCar(){
        $info = D("car")->where($_GET)->delete();
        if ($info) {
            # 删除成功
            echo "success";
        }else{
            echo "fail";
        }
    }

    //取消申请
    function cancelTask(){
        $_GET["driver_id"] = $_SESSION["userId"];
        $info = D("driver_list")->where($_GET)->delete();
        if ($info) {
            # 删除成功
            echo "success";
        }else{
            echo "fail";
        }
    }

    //获取评价
    function getComment(){
        $sql = "select * from task t left join driver_list dl on t.task_id = dl.task_id where t.task_carrier = dl.driver_id and t.task_id = ".I("get.taskId");
        $data = D()->query($sql);
        echo json_encode($data);
    }
}
