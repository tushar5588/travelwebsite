<?php
session_start();
 $con=mysqli_connect('localhost', 'root', '');
 mysqli_select_db($con, 'my_dummy_db');
 $name = $_POST['name'];
 $password= $_POST['password'];
 $s = "select * from  collegeregistration where name='$name' && password='$password'";
 $result = mysqli_query($con,$s);
 $num = mysqli_num_rows($result);
 if($num == 1){
     header('location:../contact/index.html');
 }else{
     header('location:contact.html');
 }
 ?>