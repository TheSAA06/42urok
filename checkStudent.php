<?php 
	session_start();
 ?>
<?php 
$con = mysqli_connect('127.0.0.1', 'root', '', '42urok');
$query = mysqli_query($con, "SELECT * FROM students WHERE phone='{$_POST['phone']}' and password='{$_POST['password']}'");
$stroka = $query->fetch_assoc();
$num = mysqli_num_rows($query);
if($num>0){
	header("Location: accountStudent.php");

	$_SESSION['student_id'] = $stroka['id'];
} else{
	header("Location: loginStudent.php");
}
?>
