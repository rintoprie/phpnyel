<?php
	require 'bootstrap.php';
	
	if (!isset($_SESSION["login"])) {
		header("Location:login.php");
		exit;
	}

	$act = isset($_GET["act"]) ? $_GET["act"] : 'list';
	$id = isset($_GET["id"]) ? $_GET["id"] : 0;

	switch ($act) {
		case 'list':
			$users = getALL("users");

			include 'pages/header.php';
			include 'pages/user_list.php';
			include 'pages/footer.php';
			break;
		
		case 'view':
			$post = getById("users", $id);
			$act = 'upd';
			include 'pages/header.php';
			include 'pages/user_form.php';			
			include 'pages/footer.php';
			break;
		
		case 'add':
			$act = 'upd';
			include 'pages/header.php';
			include 'pages/user_form.php';			
			include 'pages/footer.php';
			break;
		
		case 'upd':
			$data = array(
				'id' => isset($_POST['id']) ? $_POST['id'] : '',
				'username' => isset($_POST['username']) ? $_POST['username'] : '',
				'email' => isset($_POST['email']) ? $_POST['email'] : '',
				'password' => isset($_POST['password']) ? $_POST['password'] : '',
			);
			if ($data['id']!='') {
				$user= updUser($data);
			} else {
				$user = register($data);
			}
			header("Location:user.php");
			exit;
			break;
		
		case 'del':
			# code...
			break;
		
		default:
			# code...
			break;
	}

?>