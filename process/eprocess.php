<?php

require_once ('dbh.php');

$email = $_POST['mailuid'];
$password = $_POST['pwd'];

$sql = "SELECT * from `employee` WHERE email = '$email' AND password = '$password'";

echo "$sql";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
	// while ($row = mysqli_fetch_assoc($result)){
	// 	$id = $row["id"];
	// 	$email = $row["email"];
	// 	session_start();
	// 	$_SESSION['id'] = $id;
	// 	$_SESSION['email'] = $email;
	// }

	echo ("logged in");
	header("Location: ..//eloginwel.html");
}

else{
	echo "Invalid";
}
?>