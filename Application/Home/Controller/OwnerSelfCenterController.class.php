<?php
namespace Home\Controller;
use Think\Controller;
class OwnerSelfCenterController extends Controller {

	public function ownerSelfCenter(){
		$this->show();
	}

	//获取我发布的
	public function getMyTask(){
		if (!$_SESSION["userId"] || $_SESSION["type"]!=2) {
            #判断是否登陆 且角色信息是否为货主
            $this->error("登陆信息失效，请重新登陆",U('Index/index'));
            return ;
        }
        if ($_GET["tabId"]==1) {
        	# 个人中心全部task
        	$sql = "SELECT
						task_id,
						task_title,
						task_price,
						task_pic1,
						substring(add_time, 1, 11) AS add_time
					FROM
						task
					WHERE
						owner_id = ".$_SESSION["userId"]."
					ORDER BY
						add_time DESC";
        }else if ($_GET["tabId"] == 2) {
        	# 选择司机
        	$sql = "SELECT
						t.task_id,
						t.task_title,
						t.task_price,
						t.task_pic1,
						substring(t.add_time, 1, 11) AS add_time
					FROM
						task t
					WHERE
						t.owner_id = ".$_SESSION["userId"]."
					AND t.task_carrier = 0
					and t.task_id in (select task_id from driver_list GROUP BY task_id)
					ORDER BY
						t.add_time DESC";
        }else if ($_GET["tabId"] == 3) {
        	# 查看物流状态
        	$sql = "SELECT
						t.task_id,
						t.task_title,
						t.task_price,
						t.task_pic1,
						substring(t.add_time, 1, 11) AS add_time
					FROM
						task t
					LEFT JOIN driver_list dl on t.task_id = dl.task_id
					WHERE
						t.owner_id = ".$_SESSION["userId"]."
					AND t.task_carrier != 0
					and t.task_carrier = dl.driver_id
					and dl.status <= 3
					ORDER BY
						t.add_time DESC";
        }else if ($_GET["tabId"] == 4) {
        	# 已完成确定收货列表
        	$sql = "SELECT
						t.task_id,
						t.task_title,
						t.task_price,
						t.task_pic1,
						substring(t.add_time, 1, 11) AS add_time
					FROM
						task t
					LEFT JOIN driver_list dl on t.task_id = dl.task_id
					WHERE
						t.owner_id = ".$_SESSION["userId"]."
					AND t.task_carrier != 0
					and t.task_carrier = dl.driver_id
					and dl.status = 4
					ORDER BY
						t.add_time DESC";
        }else if ($_GET["tabId"] == 5) {
        	# 已完成确定收货列表
        	$sql = "SELECT
						t.task_id,
						t.task_title,
						t.task_price,
						t.task_pic1,
						substring(t.add_time, 1, 11) AS add_time
					FROM
						task t
					LEFT JOIN driver_list dl on t.task_id = dl.task_id
					WHERE
						t.owner_id = ".$_SESSION["userId"]."
					AND t.task_carrier != 0
					and t.task_carrier = dl.driver_id
					and dl.status = 6
					ORDER BY
						t.add_time DESC";
        }
        $data = D()->query($sql);
		echo json_encode($data);
	}

	//获取当前任务报名的司机
	function getTaskDriver(){
		if (!$_SESSION["userId"] || $_SESSION["type"]!=2) {
            #判断是否登陆 且角色信息是否为货主
            $this->error("登陆信息失效，请重新登陆",U('Index/index'));
            return ;
        }

        $sql = "SELECT
					dl.driver_id,
					d.driver_name,
					d.driver_tel,
					c.car_id,
					c.car_no,
					c.car_weight,
					c.car_length,
					c.car_width,
					c.car_pic
				FROM
					driver_list dl
				LEFT JOIN driver d ON dl.driver_id = d.driver_id
				left join car c on dl.car_id = c.car_id 
				WHERE
					dl.task_id = ".$_GET["taskId"];
		$data = D()->query($sql);
		echo json_encode($data);
	}

	//为某个任务选择某个司机
	function affirmDriver(){
		if (!$_SESSION["userId"] || $_SESSION["type"]!=2) {
            #判断是否登陆 且角色信息是否为货主
            echo "nologinIn";
            return ;
        }
		$condition["task_id"]   = $_GET["taskId"];
		$data["status"]         = 5;
		$data1["status"]			= 1;
		$info = D("driver_list")->where($condition)->save($data);
		$condition["driver_id"]   = $_GET["driverId"];
		$info1 = D("driver_list")->where($condition)->save($data1);
		if($info){
			$setData["task_carrier"] = $_GET["driverId"];
			$res = D("task")->where($condition)->save($setData);
			if ($res) {
				# 选择司机成功
				echo "success";
			}else{
				echo "fail";
			}
		}else{
			echo "fail";
		}

	}

	//获取某个物流的状态
	function getTaskStatus(){
		$sql = "select status from driver_list d left join task t on d.task_id = t.task_id where d.driver_id = t.task_carrier and d.task_id = ".$_GET["taskId"];
		$data = D()->query($sql);
		echo json_encode($data);
		
	}

	//确认收货
	function affirmGet(){
		$condition["task_id"] = $_GET["taskId"];
		$res = D("task")->where($condition)->select();
		if ($res[0]["task_carrier"]) {
			# 承运人
			$condition["driver_id"] = $res[0]["task_carrier"];
			//扣除货主金额
			$sql = "update owner set owner_money = owner_money-".$res[0]["task_price"].' where owner_id = '.$_SESSION["userId"];
			if ($info1 = D()->execute($sql)) {
				# 为司机加金额
				$sql1 = "update driver set driver_money = driver_money+".$res[0]["task_price"]." where driver_id = ".$res[0]["task_carrier"];
				if ($info2 = D()->execute($sql1)) {
					# 更新订单状态
					$data["status"]  = 6;
					$data["comment"] = $_GET["comment"]?$_GET["comment"]:"货主对您进行了默认评论";
					$info = D("driver_list")->where($condition)->save($data);
					if ($info) {
						# 添加评论成功
						echo "success";
					}else{
						echo "fail";
					}
				}
				
			}
			
		}
	}




}