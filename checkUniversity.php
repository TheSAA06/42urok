<?php 
	session_start();
 ?>
<?php 
$con = mysqli_connect('127.0.0.1', 'root', '', '42urok');
$query = mysqli_query($con, "SELECT * FROM universityAdmin WHERE login='{$_POST['login']}' and password='{$_POST['password']}'");
$stroka = $query->fetch_assoc();
$num = mysqli_num_rows($query);
if($num>0){
	header("Location: accountUniversity.php");

	$_SESSION['university_id'] = $stroka['id'];
} else{
	header("Location: accountUniversity.php");
}
?>