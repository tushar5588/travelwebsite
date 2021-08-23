<?php
session_start();
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'my_dummy_db');
$name = $_POST['name'];
$password = $_POST['password'];
$s = "select * from  collegeregistration where name='$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num == 1) {
    echo '<script>alert("Username already taken.");</script>';
} else {
    $reg = "insert into collegeregistration(name, password) values('$name','$password')";
    mysqli_query($con, $reg);
    header('location:../registration/index2.html');
}
