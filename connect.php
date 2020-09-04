<?php
    ini_set('display_erros', 1);
    error_reporting(~0);

        $serverName = "localhost";
        $userName = "root";
        $userPassword = "";
        $dbName = "mydatabase";
   
   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    if (mysqli_connect_errno())
    {
        echo "connect fail : " . mysqli_connect_error();
    }
    else
    {
        //echo "ได้แล้ว มันมาว่ะ.";
    }
  //  mysqli_close($conn);
?>