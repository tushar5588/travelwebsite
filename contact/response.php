<?php
try {
    $db = new mysqli("localhost", "root", "", "my_dummy_db");

}
catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['placefrom']) && isset($_POST['placeto'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message=$_POST['p'];
    $placeto=$_POST['placeto'];
    $is_insert = $db->query("INSERT INTO `collegecontactus`(`name`, `email`, `phone`, `placefrom`, `placeto`) VALUES ('$name', '$email', '$phone', '$placefrom', '$placeto')");
    if($is_insert == TRUE) {
        header('location:../thankyou/index2.html');
        exit() ;
    
    }
}
?>