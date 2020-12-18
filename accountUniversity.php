<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Проект</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	
<?php
	$con = mysqli_connect('127.0.0.1', 'root', '', '42urok');
	$query = mysqli_query($con, "SELECT * FROM students");
	$query = mysqli_query($con, "SELECT * FROM universities");
 ?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	 <a class="navbar-brand" href="index.php">Поступай легко!</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item ml-3">
	         <a href="accountUniversity.php">Аккаунт админа университета</a>
	         <a class="ml-3" href="accountStudent.php">Аккаунт студента</a>
	      </li>
	      
	    </ul>
	  </div>
	</nav>
	<?php if ($_SESSION['university_id'] == null){?>
	<div class="col-6 mx-auto">
		<h1>Авторизация админа университета</h1>
		<form action="checkUniversity.php" method="POST">
			<input class="form-control mt-3" type="" name="login" placeholder="login">
			<input class="form-control mt-3" type="" name="password" placeholder="password">
			<button class="btn btn-info mt-3">Залогиниться</button>
		</form>
	</div>
	<?php } 
		else { 
		$stroka = $query->fetch_assoc();
	?>
		<h1>Добро пожаловать, <?php echo $stroka['login']; ?></h1>
		<h2>Ваш университет: </h2>
		<h3>Заявки от абитуриентов: </h3>
		<h3>Фио абитуриентов:</h3>
	<?php } ?>
</body>