<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="claim.css">
    <title>Claim</title>
</head>
<body>
<form action="" method= "POST" enctype="multipart/form-data" autocomplete="off" >
<h1>Client's Claim Form</h1>
<input type="text"  name="name" placeholder="Your  name" required><br>


<input type="email"   name="email" placeholder = "Your email address" required><br>

<input type="tel"  name="mynumber" placeholder="Telephone" required><br>


<textarea type="" name="description" placeholder="Describe your item" required></textarea><br>

<input type="text"  name="location" placeholder="Location" required><br>

<input type="file" name="image"><br>

<input type="submit" name="submit" value="Claim">

<button type="button" name="button"><a href='home2.php'>Home</a> </button>

</form>
</body>
</html>