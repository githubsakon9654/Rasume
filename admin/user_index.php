<?php
session_start();
if ($_SESSION['UserID'] == "") {
    echo "Please Login!";
    exit();
}

if ($_SESSION['Status'] != "USER") {
    echo "This page for User only!";
    exit();
}

include("connect.php");
$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
<div  class="container"> <a>ยินดีต้อนรับ</a> <td width="197"><?php echo $objResult["Username"] ?> <a href="logout.php" >Logout</a> </div> 
<hr>
<div class="container mt-3">
  <h2>Toggleable Tabs</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Category</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
    <?php include("user_home.php"); ?>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
    <h3>Category</h3>
      <?php include("user_rice_list.php");?>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
    <?php include("comment.php");?>
    </div>
  </div>
</div>

</body>
</html>
