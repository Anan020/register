<?php
$sever = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$con = mysqli_connect($sever,$username,$password,$dbname,3306);
if($con){
    echo " connect";
}

$name = $_POST['name'];
$lastname  = $_POST['lastname'];
$email  = $_POST['email'];
$password  = $_POST['password'];

$sql = "INSERT INTO `username`( name, lastname, email, password ) VALUES ('$name','$lastname','$email','$password')";

$result = mysqli_query($con,$sql);

if($result){
    echo "Data submited";
}
else{
    echo "query faild....!";
}

?>