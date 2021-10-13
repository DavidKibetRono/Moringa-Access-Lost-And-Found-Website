<?php  ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'connect.php' ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="insertimages.css">
</head>
<body>
   


    <form   action="submitimages.php" method= "POST" enctype="multipart/form-data" autocomplete="off" >
<h1>Found Item Details</h1>
<input type="text"  name="firstname" placeholder="Items name" required><br>


<input type="email"   name="email" placeholder = "Your email address" required><br>


<input type="tel" name="mobile" placeholder = "Your telephone number" required><br>

<textarea type="text" name="item" placeholder="Describe found item" required></textarea><br>


<input type="file" name="uploadfile" value=""><br>
<input type="submit" name="submit" value="Submit">
<button type="button" name="button"><a href="home.php">Home</a></button>
</form>

</body>
</html>