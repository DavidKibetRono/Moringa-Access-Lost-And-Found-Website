<?php
    $servername='localhost';
    $username='kibet';
    $password='Kibetrono1996@';
    $dbname = "Moringa";


    $conn=mysqli_connect($servername,$username,$password,$dbname);
    
      if(!$conn){

          die('Could not Connect MySql Server:' .mysql_error());

        }
?>