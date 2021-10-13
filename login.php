<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


     <!--navigation-->

     <div class="navigation">
    <ul>
      <a href=''> <img  src="logo.png"></a> 

        <li><a href=""><i class='fa fa-address-card'></i> About Us</a></li>
        <li><a href=""><i class='fa fa-phone'></i> Contact Us</a></li>
        <li><a href="index.html"><i class='fa fa-user'></i> Register</a></li>
    </ul>
   </div> 
   <!--/navigation-->


   <form action="verifyLogin.php" method="POST" autocomplete="off">
   <h1>Login Form</h1>

<input type="email"   name="email" placeholder = "Your email address" required><br>

<input type="password"  name="password" placeholder="Password" required><br>

<input type="submit"  name ="login" value="Login"><br>

   </form>

   <!--footer-->
<div class="footer1">

<div id="div1">
    <h3>Contact -us </h3>
<p><i class="fa fa-phone"></i> +254 728234794</p>
<p><i class="fa fa-address-card"></i> BURUBURUU PHASE 4 <br> OPPOSITE KAMAGRA <br>STATION 3RD FLOOR</p>
</div>


<div id="div2">
<form action="" autocomplete="off">
<h3>Comments</h3>
  <input type='teext' name='name' placeholder='Username'><br><br>
  <textarea type='text' name='comment' placeholder="Your Comment"></textarea><br>
  <button type="button" name="button">Send</button>
</form>
</div>

</div>
<!--/footer-->
</body>
</html>