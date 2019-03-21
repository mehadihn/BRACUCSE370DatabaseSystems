<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `employee`";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$nid = mysqli_real_escape_string($conn, $_POST['nid']);
	$dept = mysqli_real_escape_string($conn, $_POST['dept']);
	$degree = mysqli_real_escape_string($conn, $_POST['degree']);
	$salary = mysqli_real_escape_string($conn, $_POST['salary']);





	$result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`password`='$email',`gender`='$gender',`contact`='$contact',`nid`='$nid',`salary`='$salary',`address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");

	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='viewemp.php';
    </SCRIPT>");


	
}
?>




<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `employee` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$firstname = $res['firstName'];
	$lastname = $res['lastName'];
	$email = $res['email'];
	$contact = $res['contact'];
	$address = $res['address'];
	$gender = $res['gender'];
	$nid = $res['nid'];
	$dept = $res['dept'];
	$degree = $res['degree'];
	$salary = $res['salary'];
}
}

?>


<html>
<head>
	<title>View Employee |  Admin Panel | XYZ Corporation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<h1>XYZ Corp.</h1>
			<ul id="navli">
				<li><a class="homeblack" href="index.html">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homered" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
	

		<form id = "registration" action="edit.php" method="POST">
			<br>
			<input type="text" name="firstName" id="textField" value="<?php echo $firstname;?>" required="required"><br><br>
			<input type="text" name="lastName" id="textField" value="<?php echo $lastname;?>" required="required"><br><br>
			<input type="email" name="email" id="textField" value="<?php echo $email;?>" required="required"><br><br>
			<input type="text" name="gender" id="textField" value="<?php echo $gender;?>"><br><br>
			<input type="number" name="contact" id="textField" value="<?php echo $contact;?>" required="required"><br><br>
			<input type="number" name="nid" id="textField" value="<?php echo $nid;?>" required="required"><br><br>
			<input type="text" name="address" id="textField" value="<?php echo $address;?>" required="required"><br><br>
			<input type="text" name="dept" id="textField" placeholder="Enter Department" required="required" value="<?php echo $dept;?>"><br><br>
			<input type="text" name="degree" id="textField" value="<?php echo $degree;?>" required="required"><br><br>
			<input type="number" name="salary" id="textField" value="<?php echo $salary;?>" required="required"><br><br>
			<input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
			<input type="submit" name="update" id="sub" value="Update">
		</form>
	</body>
	</html>
