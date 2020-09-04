<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div  class="container">
    <form name="form1" method="post" action="check_login.php">
        Login<br>
        <table border="1" style="width: 300px">
            <tbody>
                <tr>
                    <td> &nbsp;Username</td>
                    <td>
                        <input name="txtUsername" type="text" id="txtUsername">
                    </td>
                </tr>
                <tr>
                    <td> &nbsp;Password</td>
                    <td><input name="txtPassword" type="password" id="txtPassword">
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <input type="submit" name="Submit" value="Login">
        <a href="register.php"> Register</a>
        
    </form>
</div>
</body>

</html>