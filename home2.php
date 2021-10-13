<?php  

include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Lost and Found</title>
    <link rel="stylesheet" href="home.css">
</head>
<body >
       <!--navigation-->

   <div class="navigation">
    <ul>
      <a href=''> <img  src="logo.png"></a> 
      
        <li><a href=""><i class='fa fa-home'></i> Home</a></li>
        <li><a href="insertImages.php"><i class='fa fa-sticky-note-o'></i> Post Found Item</a></li>
        <li><a href=""><i class='fa fa-address-card'></i> About Us</a></li>
        <li><a href=""><i class='fa fa-phone'></i> Contact Us</a></li>
        <li><a href="#how"><i class='fa fa-question'></i> How it works</a></li>
        <li><a href="logout.php"><i class='fa fa-sign-out'></i> Logout</a></li>
    </ul>
   </div> 
   <!--/navigation-->

<!--/content-->

   <div class="content">
<h1>Moringa Access<br>Lost And Found</h1>
        <hr>

        <h2>Report Lost item</h2>
<form action="indehx.php" autocomplete="off">

<input type="text"  name="username" placeholder="Username" required>

<input type="email"  name="email" placeholder = "Email Address" required><br>

<input type="number"  name="mobile" placeholder="Telephone Number" required>

<input type="text"  name="description" placeholder="Item's Description" required><br>

<input type="file" height='600px' id="myfile" name="image" required>
<button type="button" name="button" >Report</button>

</form>

<!--List-->

<div class="list">  

<?php

$sql = "SELECT * FROM users ";

$query = mysqli_query($conn, $sql);

while($row=mysqli_fetch_array($query)){
 

  echo "<div id='kkk'>";
  
   echo "<img   src='myfolder/".$row['image']."' style='width:250px;height:250px;margin-left:20px;border-radius:100px;width:120px;height:120px;' >  <button class='btn'><a href='claim.php'>Claim</a></button>";
   echo "<p style='margin-left:50px'>";
   echo $row["firstname"];
   echo "</p>";

  echo "</div>";

}
?>


</div>
<!--/List-->

<!--How it works-->
<section class="works">
        <div id="how">
            <h1>How <span>it works</span> </h1>
           <h2> Lost and Found Procedure</h2>
<p>Lost and Found provides for the care, restitution, sale and destruction of unclaimed, lost, or abandoned property. The goal of Lost and Found is to ensure all lost items are returned to their rightful owner in a timely and efficient manner.

Lost and Found maintains lost and abandoned property as per the following retention schedule:Property valued at $300 or above is routinely sold at auction after the retention timeframe has passed. If no bid is made, the property is disposed of as deemed appropriate by Lost and Found. Property valued at less than $300 is routinely disposed of after the retention timeframe has passed as deemed appropriate by Lost and Found. Disposition methods include, but are not limited to, transfer to campus department, donate to not-for-profit organization, auction/sale and destruction.

Unclaimed cash may be returned to the finder after the expiration of the three month period, unless the property has been found by a University employee in the course of his/her employment.</p>

<h3>To Claim Property</h3>
<p>To claim property, contact the main Lost and Found office. To ensure property is returned to the rightful owner, Lost and Found requires the claimant to provide a valid picture identification and to sign-off on the property release log.</p>
           

<h4>To Turn in Lost and/or Abandoned Property</h4>
<p>In coordination with Lost and Found, other campus departments have established drop-off locations within their departments. Individuals may drop-off single items at the main Lost and Found office or at these drop-off locations.Campus departments that facilitate collection of lost and/or abandoned property within their building are to routinely contact the main Lost and Found office for pick-up and/or routinely deliver these items to the main Lost and Found office.</p>
        </div>

    </section>
<!--/How it works-->

   </div>
<!--/content-->
<!--footer-->
<div class="footer">

  <div id="column1">
      <h3>Contact -us </h3>
<p><i class="fa fa-phone"></i> +254 728234794</p>
<p><i class="fa fa-address-card"></i> access@moringaschool.com</p>
  </div>

  <div id="column2">
 <i><h3>Quick <span>links</span></h3></i>
<ul>
    <li><a href=""> Home</a></li>
    <li><a href="">About us</a></li>
    <li><a href=""> Location</a></li>
    <li><a href="">Help</a></li>
    <li><a href="">Events</a></li>

</ul>
  </div>

  <div id="column3">
 <h3>Comments</h3>
<form action="" autocomplete="off">
    <input type='myname' name='name' placeholder='Username'><br><br>
    <textarea type='text' name='comment' placeholder="Your Comment"></textarea><br>
    <button type="button" name="button">Send</button>
</form>
</div>

<div id="column4">
<p>In need of special offers?</p>
<input type="mail" name="mail" placeholder="Your email address" required>
<button type="button" name="btn">Submit</button>

</div>
<div id="column5">
<h3>Follow us</h3>
    <i class="fa fa-facebook"></i>
    <i class="fa fa-twitter"></i>
    <i class="fa fa-instagram"></i>
    <i class="fa fa-youtube"></i>
</div>
</div>
 <!--/footer-->
 
</body>
</html>