<?php
include ("config.php");
if(isset($_POST['fullname'])){
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO partients(fullname,email,password) VALUES ('$fullname','$email','$password')";
mysql_query($conn,$sql);
echo "patient registered sucessfully";
}
?>
