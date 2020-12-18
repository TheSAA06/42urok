<?php 
	session_start();
 ?>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', '42urok');
	$insert = mysqli_query($con, "INSERT INTO applications (student_id, universities_id) VALUES ('{$_SESSION['student_id']}','{$_POST['uni_id']}')");
	header("Location: index.php");
 ?>