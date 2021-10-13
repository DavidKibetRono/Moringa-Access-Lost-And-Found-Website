<?php  ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'connect.php' ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="index2.css">
    <title>Register-Form</title>

</head>
<body>
   
    <form action="" method= "POST" enctype="multipart/form-data" autocomplete="off" >
<h1>Registration Form</h1>
<label>FirstName</label><br>
<input type="text"  name="firstname" placeholder="Your first name" required><br>


<label>Email Address</label><br>
<input type="email"   name="email" placeholder = "Your email address" required><br>

<label>Password</label><br>
<input type="password"  name="password" placeholder="Password" required><br>
<input type="submit" name="submit" value="Register"><br>
<p>Already signed-up? <a href="login.php">Login</a></p>

</form>

</body>
</html>