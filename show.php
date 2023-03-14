<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Showing Book Information</title>
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
<h1 style=" font-style:italic;">Showing all book Information</h1>
    <section>
    <table class="table">
        <tr>
            <th>BookName</th>
            <th>WriterName</th>
            <th>BookPrice</th>
            <th>Copy</th>

        </tr>

        <?php
        $connect = mysqli_connect("localhost", "root", "", "mushfiq");
        $result = mysqli_query($connect, "SELECT * FROM book");
        while ($std = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $std['bookname'] ?></td>
                <td><?php echo $std['writername'] ?></td>
                <td><?php echo $std['bookprice'] ?> </td>
                <td><?php echo $std['copy'] ?> </td>

            </tr>

        <?php } ?>



    </table>
    </section>
</body>
</html>