<?php
function qSELECT($query, $object = NULL){
	global $conn;

	$result = mysqli_query($conn, $query);
	$return = [];
	if($result){
		$num = mysqli_num_rows($result);
		for ($i=0; $i<$num; $i++){
			if(!is_null($object)){
				$row = mysqli_fetch_object($result);
			}else{
				$row = mysqli_fetch_array($result);
			}
			$return[$i]=$row;
		}
	}
	return $return;
}

function counting($table, $what){
	$query = "SELECT COUNT(1) FROM ".$table;
	$result = mysql_query($query);
	$num = mysql_result($result, 0, 0);
	return $num;
}

function getById($table, $id){
	$query = "SELECT * FROM ".$table." WHERE id=".$id." ";
	$result = qSELECT($query);
	if($result) return $result[0];
	else return $result;
}

function getAll($table){
	$query = "SELECT * FROM ".$table;
	$result = qSELECT($query);
	return $result;
}

function queryToSelect($table, $where, $operator, $zerovalue, $key, $value, $id){
	$ul = '<option value="'.$zerovalue.'">Please select</option>';

	$query = "SELECT * FROM ".$table." WHERE `".$where."` ".$operator." ".$zerovalue." ";
	$result = qSELECT($query);
	foreach ($result as $row){
		$ul .= '<option value="'.$row[$key].'" ';
		$ul .= $id == $row[$key] ? "selected" : "" ;
		$ul .= '>'.$row[$value].'</option>';
	}
	return $ul;
}

function register($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$email = strtolower(stripslashes($data["email"]));
	$password = strtolower(stripslashes($data["password"]));
	$password = password_hash($password, PASSWORD_DEFAULT);

	$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>alert('username not available');</script>";
		return false;
	}
	mysqli_query($conn, "INSERT INTO users VALUES(NULL,'$username','$email','$password')");

	return mysqli_affected_rows($conn);
}

function updUser($data) {
	global $conn;

	$id = $data['id'];
	$username = strtolower(stripslashes($data["username"]));
	$email = strtolower(stripslashes($data["email"]));
	$password = strtolower(stripslashes($data["password"]));
	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($conn, "UPDATE users SET username='$username', email='$email', password='$password' WHERE id=".$id);

	return mysqli_affected_rows($conn);
}

function addPost($data) {
	global $conn;

	$title = $data['title'];
	$body = $data['body'];
	$author = $data['author'];
	$modified = $data['modified'];

	mysqli_query($conn, "INSERT INTO posts VALUES(NULL,'$title','$body','$author','$modified')");

	return mysqli_affected_rows($conn);
}

function updPost($data) {
	global $conn;

	$id = $data['id'];
	$title = $data['title'];
	$body = $data['body'];
	$author = $data['author'];
	$modified = $data['modified'];

	mysqli_query($conn, "UPDATE posts SET title='$title', body='$body', author='$author', modified='$modified' WHERE id=".$id);

	return mysqli_affected_rows($conn);
}
?>