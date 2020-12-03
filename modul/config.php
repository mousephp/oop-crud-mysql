<?php 
	$con = new mysqli('localhost', 'root', '', 'php_oop_crud');
		//Kiểm tra kết nối
		if ($con->connect_error) {
			die('kết nối không thành công ' . $connect->connect_error);
		}
 ?>