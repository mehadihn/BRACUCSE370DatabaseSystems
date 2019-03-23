<?php 
  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  require_once ('process/dbh.php');
  $sql = "SELECT * FROM `employee` where id = '$id'";
  $result = mysqli_query($conn, $sql);
  $employee = mysqli_fetch_array($result);
  $empFname = ($employee['firstName']);
  $empLname = ($employee['lastName']);
  
  $email = $employee['email'];
  $contact = $employee['contact'];
  $address = $employee['address'];
  $gender = $employee['gender'];
  $nid = $employee['nid'];
  $dept = $employee['dept'];
  $degree = $employee['degree'];
  $salary = $employee['salary'];









?>



<html>
<head>
  <title>Employee Panel | XYZ Corporation</title>
  <link rel="stylesheet" type="text/css" href="styleprofile.css">
</head>
<body>
  
  <header>
    <nav>
      <h1>XYZ Corp.</h1>
      <ul id="navli">
        <li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>"">HOME</a></li>
        <li><a class="homered" href="myprofile.php?id=<?php echo $id?>"">My Profile</a></li>
        <li><a class="homeblack" href="applyleave.php?id=<?php echo $id?>"">Apply Leave</a></li>
        <li><a class="homeblack" href="elogin.html">Log Out</a></li>
      </ul>
    </nav>
  </header>
   
  <div class="divider"></div>

  <div class="info">
    <p ><b>Personal Informations</b></p>
    <p > Name: <?php echo "$empFname"; ?> <?php echo "$empLname"; ?></p>
    <p > Email: <?php echo "$email"; ?></p>
    <p > Name: <?php echo "$empFname"; ?> <?php echo "$empLname"; ?></p>
    <p > Name: <?php echo "$empFname"; ?> <?php echo "$empLname"; ?></p>
  </div>


    <div class="infoproject">
    <p ><b>Personal Informations</b></p>
    <p > Name: <?php echo "$empFname"; ?> <?php echo "$empLname"; ?></p>
    <p > Email: <?php echo "$email"; ?></p>
    <p > Name: <?php echo "$empFname"; ?> <?php echo "$empLname"; ?></p>
    <p > Name: <?php echo "$empFname"; ?> <?php echo "$empLname"; ?></p>
  </div>




</body>
</html>