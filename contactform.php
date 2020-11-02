<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$conn=new mysqli("localhost", "root","","login");
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into contact (nume,mail,mesaj) values(?,?,?)");
    $stmt->bind_param('sss',$name,$email,$msg);
    $stmt->execute();
    header("Location: client.php");
    $stmt->close();
    $conn->close();
}
?>