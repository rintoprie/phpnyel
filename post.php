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
			$posts = getALL("posts");

			include 'pages/header.php';
			include 'pages/post_list.php';
			include 'pages/footer.php';
			break;
		
		case 'view':
			$post = getById("posts", $id);
			$act = 'upd';
			include 'pages/header.php';
			include 'pages/post_form.php';			
			include 'pages/footer.php';
			break;
		
		case 'add':
			$act = 'upd';
			include 'pages/header.php';
			include 'pages/post_form.php';			
			include 'pages/footer.php';
			break;
		
		case 'upd':
			$data = array(
				'id' => isset($_POST['id']) ? $_POST['id'] : '',
				'title' => isset($_POST['title']) ? $_POST['title'] : '',
				'body' => isset($_POST['body']) ? $_POST['body'] : '',
				'author' => isset($_POST['author']) ? $_POST['author'] : '',
				'modified' => isset($_POST['modified']) ? $_POST['modified'] : ''
			);
			if ($data['id']!='') {
				$post = updPost($data);
			} else {
				$post = addPost($data);
			}
			header("Location:post.php");
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