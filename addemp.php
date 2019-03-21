<html>
<head>
	<title>Add Employee | Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<h1>XYZ Corp.</h1>
			<ul id="navli">
				<li><a class="homeblack" href="index.html">HOME</a></li>
				<li><a class="homered" href="addemp.php">Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
	<div class = "simple-form">
		<form id = "registration" action="process/addempprocess.php" method="POST">
			<br>
			<input type="text" name="firstName" id="textField" placeholder="Enter First Name" required="required"><br><br>
			<input type="text" name="lastName" id="textField" placeholder="Enter Last Name" required="required"><br><br>
			<input type="email" name="email" id="textField" placeholder="Enter Email Address" required="required"><br><br>
			
			<input type="text" name="gender" id="textField" placeholder="Enter Gender"><br><br>
			<input type="number" name="contact" id="textField" placeholder="Enter Contact Number" required="required"><br><br>
			<input type="number" name="nid" id="textField" placeholder="Enter NID" required="required"><br><br>
			<input type="text" name="address" id="textField" placeholder="Enter Address" required="required"><br><br>
			<input type="text" name="dept" id="textField" placeholder="Enter Department" required="required"><br><br>
			<input type="text" name="degree" id="textField" placeholder="Enter Degree" required="required"><br><br>
			<input type="number" name="salary" id="textField" placeholder="Enter Salary" required="required"><br><br>
			<input type="submit" name="subButton" id="sub" value="Add Employee">

				





		</form>




	</div>
</body>
</html>