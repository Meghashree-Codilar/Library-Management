<html>
    <head>
        <style>
            body{
                background-color:pink;
            }
        </style>       
    </head>
<body>
    <form action="insertredirect.php" method="POST">
        <table cellspacing=3px cellpadding=3px>
            <tr>
                <td><label>Book id:</label></td>
                <td><input type="text" name="book_id" size="45"></td>
            </tr>
            <tr>
                <td><label>Book name: </label></td>
                <td><input type="text" name="book_name" size="45"></td>
            </tr>
            <tr>
                <td><label>Author name:</label></td>
                <td><input type="text" name="author_name" size="45"></td>
            </tr>
            <tr>
                <td><label>Add Image:</label></td>
                <td><input type="file" name="image" size="45"></td>
            </tr>
            <tr>
                <td><label>Published year:</label></td>
                <td><input type="text" name="published" size="45"></td>
            </tr>
            <tr>
                <td><input type="submit"  Value="UPLOAD" size="45"/></td>
            </tr>
        </table>
    </form>
</body>
</html>