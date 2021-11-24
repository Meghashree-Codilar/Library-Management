<html>
    <head> 
    <style>
            body{
                background-color:powderblue;
                
                }
            input{
                padding:7px;
                
                } 
    </style>     
    </head>
<body>
    <form action="signupredirect.php" method="POST">
        <table cellspacing=3px cellpadding=3px>
            <tr>
                <td><b><label>First Name:</label></td>
                <td><input type="text" name="firstname" size="45"></td>
            </tr>
            <tr>
                <td><b><label>Last Name: </label></td>
                <td><input type="text" name="lastname" size="45"></td>
            </tr>
            <tr>
                <td><b><label>Email:</label></td>
                <td><input type="email" name="email" size="45"></td>
            </tr>
            <!-- <tr>
                <td><label>Profile Picture:</label></td>
                <td><input type="file" name="profilepicture" size="45"></td>
            </tr> -->
            <tr>
                <td><b><label>Password:</label></td>
                <td><input type="password" name="password" size="45"></td>
            </tr>
            <tr>
                <td><input type="submit"  Value="Register" size="45"/></td>
            </tr>
        </table>
    </form>
</body>
</html>