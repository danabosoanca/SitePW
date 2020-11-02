<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$name=$_POST['name'];
$localitate=$_POST['localitate'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$detalii=$_POST['detalii'];

$conn=new mysqli("localhost", "root","","login");
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into rezervari (nume,localitate,telefon,email,detalii) values(?,?,?,?,?)");
    $stmt->bind_param('ssdss',$name,$localitate,$tel,$email,$detalii);
    $stmt->execute();
    header("Location: client.php");
    $stmt->close();
    $conn->close();
}




?>