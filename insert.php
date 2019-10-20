<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdata";

$conn = new mysqli($servername,$username,$password,$dbname);

if(mysqli_connect_error()){
  die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}else {
   $select= "SELECT email from form where email = ? Limit 1";
   $insert = "INSERT INTO form (name,email,phone,message) values (?,?,?,?)";

   //prepare Statement
   $stmt = $conn->prepare($select);
   $stmt->bind_param("s", $email); // s for string email
   $stmt->execute();
   $stmt->bind_result($email);
   $stmt->store_result();
   $rnum = $stmt->num_rows;

   if($rnum==0){
     $stmt->close();

     $stmt = $conn->prepare($insert);
     $stmt->bind_param("ssis",$name,$email,$phone,$message);
     $stmt->execute();
     echo "Record entered succesfully";
     header("Location:contact.php");
   } else{
     echo "Someone already registered using this email";

   }
   $stmt->close();
   $conn->close();


}




 ?>
