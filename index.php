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
	<div class="col-10 mx-auto">
		<div class="row">
		<?php
			for($i=0;$i<$query->num_rows;$i++){
			$stroka = $query->fetch_assoc();
		?>
			
			<!--карточка одного университета-->
			<div class="col-3">
				<img class="w-100" src="<?php echo $stroka['photo'] ?>">
				<h4><?php echo $stroka['name'] ?></h4>
				<p><?php echo $stroka['description'] ?></p>
				<form action="insertUniversities.php" method="POST">
					<input style="display: none" type="" name="uni_id" value="<?php echo $stroka['id'] ?>">
					<button class="btn btn-primary">Подать заявку</button>
				</form>
			</div>
		<?php } ?>
	
		</div>
	</div>
</body>
</html>