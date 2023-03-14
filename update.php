<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Updating Book Info</title>
</head>
<body>
<section >
    <div class="nav-bar">
       <a href="option.php" class="logo">BOOKCLUB</a>
       <ul class="nav-link">
          <li><a href="option.php">Home</a></li>
          <li><a href="show.php">Show</a></li>
          <li><a href="inserting.php">Add</a></li>
          <li><a href="remove.php">Remove</a></li>
          <li><a href="update.php">Update</a></li>
       </ul>
    </div>
    </section>
    <div class="book-info">
    <form action="" method="POST">
      <fieldset>
        <legend>Student Info System</legend>
        <label>Book Name:</label>
        <input type="text" name="bookname" class="input-cls" placeholder="Enter Book Name " required />
        <label>Book Price: </label>
        <input type="number" name="bookprice" class="input-cls" placeholder="Enter Book Price " />
        <label >Available Copy: </label>
        <input type="number" name="copy" class="input-cls" placeholder="Enter available copy " />
        <input type="submit" name="submit" class="btn" value="Update" />
    </fieldset>
    </form>
    </div>
    

</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $bookname = $_POST['bookname'];
    $bookprice = $_POST['bookprice'];
    $copy = $_POST['copy'];

    $connect = mysqli_connect("localhost", "root", "", "mushfiq");
    $sql = "UPDATE book SET bookprice='$bookprice',copy='$copy' WHERE bookname ='$bookname'";

    if(mysqli_query($connect,$sql))
    {
        echo "Book info updated successfully!";
    }
    else{
        echo "Error Occured. Try again...";
    }
}

?>