<?php
	//测试php是否可以拿到数据库中的数据
	/*echo "44444";*/
	
	//做个路由 action为url中的参数
	$action = $_GET['action'];

	switch($action) {
		case 'init_data_list':
			init_data_list();
			break;
		case 'add_row':
			add_row();
			break;
		case 'del_row':
			del_row();
			break;
		case 'edit_row':
			edit_row();
			break;
	}
	
	//查询方法
	function init_data_list(){
		//测试 运行crud.html时是否可以获取到 下面这个字符串
		/*echo "46545465465456465";*/
		
		//查询表并通过表ID = user_id 来排序   ORDER BY ID由小到大 ORDER BY ID 
		$sql = "SELECT * FROM `t_users` ORDER BY user_id";
		$query = query_sql($sql);
		while($row = $query->fetch_assoc()){
			$data[] = $row;
		}
		
		$json = json_encode(array(
            "resultCode"=>200,
            "message"=>"查询成功！",
            "data"=>$data
        ),JSON_UNESCAPED_UNICODE);
		
		//转换成字符串JSON,并输出
        echo($json);
	}
	
	//新增方法
	function add_row(){
		/*获取从客户端传过来的数据*/
		$userName = $_GET['user_name'];
		$userAge = $_GET['user_age'];
		$userSex = $_GET['user_sex'];
		
		/*var_dump($_POST);
		*/
		//INSERT INTO 表名 （列名1，列名2，...）VALUES （'对应的数据1'，'对应的数据2'，...）
		// VALUES 的值全为字符串，因为表属性设置为字符串
		$sql = "INSERT INTO t_users (user_name,user_age,user_sex) VALUES ('$userName','$userAge','$userSex')";
		if($res = query_sql($sql,"SELECT LAST_INSERT_ID()  as LD")){
			$id = $res->fetch_assoc();
			echo $id['LD'];
		}else{
			echo "新增不成功！";
		}
	}
	
	//删除方法
	function del_row(){
		//测试
		/*echo "ok!";*/
		
		//接收传回的参数
		$rowId = $_GET['rowId'];
		$sql = "delete from t_users where user_id='$rowId'";
		
		if(query_sql($sql)){
			echo "ok!";
		}else{
			echo "删除失败！";
		}
	}
	function edit_row(){}
	
	/**查询服务器中的数据
	 * 1、连接数据库,参数分别为 服务器地址 / 用户名 / 密码 / 数据库名称
	 * 2、返回一个包含参数列表的数组
	 * 3、遍历$sqls这个数组，并把返回的值赋值给 $s
	 * 4、执行一条mysql的查询语句
	 * 5、关闭数据库
	 * 6、返回执行后的数据
	 */
	function query_sql(){
		$mysqli = new mysqli("127.0.0.1", "root", "root", "crud");
		$sqls = func_get_args();
		foreach($sqls as $s){
			$query = $mysqli->query($s);
		}
		$mysqli->close();
		return $query;
	}
?>