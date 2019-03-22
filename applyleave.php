<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	$sql = "SELECT * FROM `employee` where id = '$id'";
	$result = mysqli_query($conn, $sql);
	$employee = mysqli_fetch_array($result);
	$empName = ($employee['firstName']);
	//echo "$id";
?>

<html>
<head>
	<title>Apply Leave | Employee Panel | XYZ Corporation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>XYZ Corp.</h1>
			<ul id="navli">
				<li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>"">HOME</a></li>
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>"">My Profile</a></li>
				<li><a class="homered" href="applyleave.php?id=<?php echo $id?>"">Apply Leave</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
		<div class = "simple-form">
		<form id = "registration" action="process/applyleaveprocess.php?id=<?php echo $id?>" method="POST">
			<br>
			<p>reason</p>
			<input type="text" name="reason" id="textField" placeholder="Enter Your Reason" required="required"><br><br>
			<input type="date" name="start" id="textField" required="required"><br><br>
			<input type="date" name="end" id="textField"  required="required"><br><br>
			<input type="submit" name="subButton" id="sub" value="Submit">
		</form>




	</div>
		
	</div>
</body>
</html>