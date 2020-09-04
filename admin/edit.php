<html>

<head>
    <title>PHP & MySQL (mysqli)</title>
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    error_reporting(~0);
    // $serverName = "localhost";
    // $userName = "root";
    // $userPassword = "";
    // $dbName = "mydatabase";
    // $conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);
    include("connect.php");
    $sql = "UPDATE tb_place SET
    p_name = '" . $_POST["pname"] . "', 
    p_description1 = '" . $_POST["pdes1"] . "',
    p_description2 = '" . $_POST["pdes2"] . "',
    p_description3 = '" . $_POST["pdes3"] . "',
    p_credit = '" . $_POST["pcredit"] . "'

    WHERE p_id = '" . $_POST["pID"] . "' ";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "Record update successfully";
        header("location:index.php");
    }
    mysqli_close($conn);
    ?>
</body>

</html>