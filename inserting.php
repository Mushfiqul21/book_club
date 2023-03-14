<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inserting Data Info</title>
</head>
<body>
    <section >
    <div class="nav-bar">
       <a href="option.php" class="logo">BOOKCLUB</a>
       <ul class="nav-link">
          <li><a href="option.php">Home</a></li>
          <li><a href="show.php">Show</a></li>
          <li><a href="insert.php">Add</a></li>
          <li><a href="remove.php">Remove</a></li>
          <li><a href="update.php">Update</a></li>
       </ul>
    </div>
    </section>
    <section>
    <div class="book-info">
    <form action="" class="std" method="POST">
      <fieldset>
        <legend>Inserting book information</legend>
        <div class="std">
        <label>Book Name:</label>
        <input type="text" name="bookname" class="input-cls" placeholder="Enter Book Name " required /> <br>
        </div>
       <div class="std">
       <label>Writer Name: </label>
        <input type="text" name="writername" class="input-cls" placeholder="Enter Writer Name " /> <br>
       </div>
       <div class="std">
       <label>Book Price: </label>
        <input type="number" name="bookprice" class="input-cls" placeholder="Enter book price " /> <br>
       </div>
        <div class="std">
        <label>Available Copy: </label>
        <input type="number" name="copy" class="input-cls"
        placeholder="Available Cope " /> <br>
        </div>
   
        <input type="submit" name="submit" class="btn-design" value="Add" />
    </form>
    </fieldset>
  </div>
    </section>
</body>
</html>

<?php


if(isset($_POST['submit'])){

 $bookname = $_POST['bookname'];
 $writername = $_POST['writername'];
 $bookprice = $_POST['bookprice'];
 $copy = $_POST['copy'];

 $connect = new mysqli("localhost","root","","mushfiq");

 $sql = ("INSERT INTO book(bookname, writername, bookprice, copy) VALUES ('$bookname','$writername','$bookprice','$copy')");

 if(mysqli_query($connect,$sql))
{
    echo "Book information stored successfully....";
}
else
{
    echo "Something went wrong. Try again.....";
}
}
?>