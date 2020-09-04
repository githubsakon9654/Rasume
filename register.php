<html>
<head>
    <title>Register</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
    <div class="container" >
    <form name="form1" method="post" action="save_register.php">
        Register Form <br>
        <table wid)th="400" border="1" style="width: 400px">
            <tbody>
                <tr>
                    <td width="125"> &nbsp;Username</td>
                    <td width="180">
                        <input name="txtUsername" type="text" id="txtUsername" size="20">
                    </td>
                </tr>
                <tr>
                    <td> &nbsp;Password</td>
                    <td><input name="txtPassword" type="password" id="txtPassword">
                    </td>
                </tr>
                <tr>
                    <td> &nbsp;Confirm Password</td>
                    <td><input name="txtConPassword" type="password" id="txtConPassword">
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;Name</td>
                    <td><input name="txtName" type="text" id="txtName" size="35"></td>
                </tr>
                <tr>
                    <td> &nbsp;Status</td>
                    <td>
                        <select name="SelectStatus" id="SelectStatus">
                            <option value="USER">USER</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <input type="submit" name="Submit" value="Save">
        </div>
    </form>
</bod)y>

</html>