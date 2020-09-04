<html>

<head>
    <title>PHP & MySQL (mysqli)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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

    
        $str = $_GET["id"];
    
    $sql = "DELETE FROM tb_comment WHERE cm_id = '$str' ";
    //$sql = "DELETE FROM tb_place WHERE p_id = '".$str."' " ;
    $query = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn)) {
       
        header("location: index.php");
    }
    mysqli_close($conn);
    ?>
</body>

</html>