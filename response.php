<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["login_key"])) {
		if ($_POST["login_key"] == "iKUJ1KTtfI4NqIHAf7QQha71W4vil4uLWR1YQREFkJLE4sGL5OvnLN9Ni7PAlkpP") {
			$display = "暴力破解成功!!!";
		} else {
			$display = "请重新登陆!";
		}
		header('Content-Type: application/json');
		echo json_encode(array('message' => $display));
		exit; 
	}
?>