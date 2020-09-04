<?php
    session_start();
        if ($_SESSION['UserID'] == "") {
            echo "Please Login!";
            exit();
        }

        if ($_SESSION['Status'] != "USER") {
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
    <title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div  class="container"> <a href="index.php">List</a> </div>
<table class="table">
            <thead>
                <tr>
                    <th>Category ID</th>
                    <th>Rice Name</th>
                    <th>History</th>
                    <th>Outstanding feature</th>
                    <th>recessive</th>
                    <th>Credit</th>
                </tr>
            </thead>
            <tbody>
    <?php
    $strCustomerID = null;
    
    if (isset($_GET["c_id"])) {
        $strCustomerID = $_GET["c_id"];
    }
    $i = 1;
    $sql = "SELECT * FROM tb_place WHERE c_id = '" . $strCustomerID . "' ";
    $query = mysqli_query($conn, $sql);
    
    while ($rs2 = mysqli_fetch_array($query)) {
    ?>
  
        <tr>
            <td width="50"><?= $rs2['c_id'] ?></td>
            <td width="120"><?= $rs2['p_name'] ?></td>
            <td width="500" ><?= $rs2['p_description1'] ?></td>
            <td width="500" ><?= $rs2['p_description2'] ?></td>
            <td width="500" ><?= $rs2['p_description3'] ?></td>
            <td><?= $rs2['p_credit'] ?></td>

        </tr>
        <?php $i++; } ?>
            </tbody>
    </table>
    <?php
    mysqli_close($conn);
    ?>
</body>

</html>