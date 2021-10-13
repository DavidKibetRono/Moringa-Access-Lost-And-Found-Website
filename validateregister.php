<?php
error_reporting(0);
?>

<?php 

include_once 'connect.php';    
    if(isset($_POST['submit']))

    {    
        
    $name = $_POST['firstname'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];  


    $sql ="INSERT INTO me () VALUES('$name', '$email' , '$pwd')";


    $query=mysqli_query($conn,$sql);

	if($query){

header('Location: login.php'); 

} 

}
?>

