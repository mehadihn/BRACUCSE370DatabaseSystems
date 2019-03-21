<?php

require_once ('dbh.php');

$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$nid = $_POST['nid'];
$dept = $_POST['dept'];
$degree = $_POST['degree'];
$salary = $_POST['salary'];


$sql = "INSERT INTO `employee`(`id`, `firstName`, `lastName`, `email`, `password`, `gender`, `contact`, `nid`, `salary`, `address`, `dept`, `degree` ) VALUES ('','$firstname','$lastName','$email','$email','$gender','$contact','$nid', '$salary', '$address','$dept','$degree')";

//echo "$sql";

$result = mysqli_query($conn, $sql);
//echo "$result";
if(($result) == 1){
	
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='..//addemp.php';
    </SCRIPT>");
	//header("Location: ..//aloginwel.php");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>