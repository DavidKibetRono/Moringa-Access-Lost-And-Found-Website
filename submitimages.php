<?php
error_reporting(0);
?>

<?php 
  $msg = "";
include_once 'connect.php';    
    if(isset($_POST['submit']))

    {    
        
    $name = $_POST['firstname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $item = $_POST['item'];
    $image=$_FILES['uploadfile']['name'];
    $tempname = $_FILES["uploadfile"]["tmp_name"]; 
    $folder = "myfolder/".basename($image);


    $sql ="INSERT INTO users () VALUES('$name', '$email' , '$mobile','$item','$image')";


    mysqli_query($conn,$sql);

		// Now let's move the uploaded image into the folder: image

        if (move_uploaded_file($tempname, $folder))  {

          header("Location: insertImages.php");

        }else{

            $msg = "Failed to upload image";

      }
   
      $row = mysqli_query($conn, "SELECT * FROM users");

}
?>

