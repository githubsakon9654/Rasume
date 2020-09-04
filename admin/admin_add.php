<?php
    session_start();
        if ($_SESSION['UserID'] == "") {
            echo "Please Login!";
            exit();
        }

        if ($_SESSION['Status'] != "ADMIN") {
            echo "This page for Admin only!";
            exit();
        }

include("connect.php");

$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

?>

<html>

<head>
    <title> PHP & MySQL (mysqli)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      
</head>

<body>
    <div class="container" ><a href="index.php">Home</a></div>
    <form action="save.php" name="frmAdd" method="post">
        <table width="284" border="1">
            <tr>
                <th width="120">CategoryID</th>
                <td><input type="text" name="cid" size="5"></td>
            </tr>
            <tr>
                <th width="120">Rice Name</th>
                <td width="50"><input type="text" name="pname" size="15"></td>
            </tr>
            <tr>
                <th width="120">History</th>
                <td><textarea name="pdes1" type="text" rows="4" cols="50"></textarea></td>
            </tr>
            <tr>
                <th width="120">Outstanding feature</th>
                <td><textarea name="pdes2" type="text" rows="4" cols="50"></textarea></td>
            </tr>
            <tr>
                <th width="120">Recessive characteristics</th>
                <td><textarea name="pdes3" type="text" rows="4" cols="50"></textarea></td>
            </tr>
            <tr>
                <th width="120">Credit</th>
                <td><input type="text" name="pcredit" size="48"></td>
            </tr>
            
        </table>
        <input type="reset" name="reset" value="reset"> <input type="submit" name="submit" value="ok">
    </form>
</body>

</html>