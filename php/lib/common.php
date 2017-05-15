<?php
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