<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

  $id = $_POST['id'];
  $old = $_POST['oldpass'];
  $new = $_POST['newpass'];
  
  $result = mysqli_query($conn, "select employee.password from employee WHERE id = $id");
     $employee = mysqli_fetch_assoc($result);
          if($old == $employee['password']){
            $sql = "UPDATE `employee` SET `password`='$new' WHERE id = $id";
            mysqli_query($conn, $sql);
             echo ("<SCRIPT LANGUAGE='JavaScript'>
                  window.alert('Password Updated')
                window.location.href='myprofile.php?id=$id';</SCRIPT>"); 
          
        }

        else{
          echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Update Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
        }

  
}
?>




<!-- <?php
  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `employee` WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if($result){
  while($res = mysqli_fetch_assoc($result)){
  $old = $res['password'];
  echo "$old";
}
}

?> -->

<html>
<head>
  <title>Change Password | XYZ Corporation</title>
  <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
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
  

    <!-- <form id = "registration" action="edit.php" method="POST"> -->
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update Password</h2>
                    <form id = "registration" action="changepassemp.php" method="POST">

                          <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <p>Old Password</p>
                                     <input class="input--style-1" type="Password" name = "oldpass" required >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                  <p>New Password</p>
                                    <input class="input--style-1" type="Password" name="newpass" required>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                    
            </div>
        </div>
    </div>


</body>
</html>
