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
    <title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php
    $strCustomerID = null;
    
    if (isset($_GET["p_id"])) {
        $strCustomerID = $_GET["p_id"];
    }
    $sql = "SELECT * FROM tb_place WHERE p_id = '" . $strCustomerID . "' ";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
    ?>
    <table width="284" border="1">
        <tr>
            <th width="120">CustomerID</th>
            <td width="238"><?php echo $result["p_id"]; ?></td>
        </tr>
        <tr>
            <th width="120">Name</th>
            <td><?php echo $result["Name"]; ?></td>
        </tr>
        <tr>
            <th width="120">Email</th>
            <td><?php echo $result["Email"]; ?></td>
        </tr>
        <tr>
            <th width="120">CountryCode</th>
            <td><?php echo $result["CountryCode"]; ?></td>
        </tr>
        <tr>
            <th width="120">Budget</th>
            <td><?php echo $result["Budget"]; ?></td>
        </tr>
        <tr>
            <th width="120">Used</th>
            <td><?php echo $result["Used"]; ?></td>
        </tr>
    </table>
    <?php
    mysqli_close($conn);
    ?>
</body>

</html>