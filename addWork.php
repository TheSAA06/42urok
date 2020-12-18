<?php 
	session_start();
 ?>
<?php
	$img_direct = "img/";
	$img_name = $img_direct . basename($_FILES['file']['name']);
	$upload = move_uploaded_file($_FILES['file']['tmp_name'], $img_name);
	
	$con = mysqli_connect('127.0.0.1', 'root', '', '42urok');
	$query = mysqli_query($con, "UPDATE users SET avatar='{$img_name}' WHERE id={$_SESSION['student_id']}");
	$insert = mysqli_query($con, "INSERT INTO works (img, description, student_id) VALUES ('{$img_name}','{$_POST['desc']}','{$_SESSION['student_id']}')");
	header("Location: accountStudent.php");
 ?>