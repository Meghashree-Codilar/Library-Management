<?php
	ini_set('display_errors', true);
	require_once __DIR__ .'/include.php';
	$display = new Display();
	$data = $display->displayBook();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color:pink;
            }
        input[type=text] {
        width: 100%;
        padding: 14px 20px;
        }
    </style>

    <title>Title</title>
</head>
<body>
<form action="add.php" method="POST">
  <input type="submit" value="ADD BOOKS">
</form><br>
        <table border='2'>

            <tr>
            
            <th>Book id</th>
            
            <th>Book name</th>
            
            <th>Author name</th>
            
            <th>Book image</th>

            <th>Published year</th>
            <!-- <th>Delete Books</th> -->
            </tr>
            <?php foreach ($data as $row): ?>
             <tr>
             <td> <?php echo $row['book_id'];?></td>
             <td> <?php echo $row['book_name'];?></td>
             <td> <?php echo $row['author_name'];?></td>
             <td> <img src="./image/<?php echo $row['book_image'];?>" height="50px" width="50px"></td>
             <td> <?php echo $row['published_year'];?></td>
             <td><form action="deleteredirect.php" method="POST">
            <button value="<?php echo  $row['book_id'];?>" name='book_id'>Delete</button>
            </form></td>
            </tr>
            <?php endforeach; ?>
            </table>
</body>
</html>