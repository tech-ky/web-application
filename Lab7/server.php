<?php
session_start();
$db = mysqli_connect('localhost:3307','root','','crud');
if(!$db){
    die("Connection failed: ".mysqli_connect_error());
}
$name="";
$address="";
$id=0;
$update=false;

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $sql = "INSERT INTO info (name, address) VALUES ('$name', '$address')";
    if (mysqli_query($db, $sql)) {
        $_SESSION['message'] = "Address Saved";
    } else {
        $_SESSION['message'] = "Address Save Failed!";
    }
}
?>