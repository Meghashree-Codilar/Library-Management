<html>
    <head>
        <style>
            body{
                background-color:powderblue;
                transform:translateX(10%)translateY(20%);

            }
            input{
                padding:5px;
                
                
            }
        </style>
    </head>
    <body>
        <form action="signinredirect.php" method="POST">
        <table cellspacing=3px cellpadding=3px>
            <tr>
                <td><b><label>Email:</label></b></td>
                <td><input type="email" name="email" size="45"></td>
            </tr>
            <tr>
                <td><b><label>Password:</label></b></td>
                <td><input type="password" name="password" size="45"></td>
            </tr>
            <tr>
                <td><input type="submit"  Value="login"  name="login" size="45"/></td>
            </tr>
            </table>
    </form>
    <a href="signup.php">Register</a>
</body>
</html>