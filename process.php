<?php
$conn=mysqli_connect("localhost","root","","login");
$username = $_POST['username'];
$password = $_POST['password'];
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);



$result=mysqli_query($conn,"select * from users where username= '$username' and password='$password'") or die("Failed to query database ".mysql_error());
$row=mysqli_fetch_array($result);
if($row['username']==$username&& $row['password']==$password){
    header('Location: admin.php');
}else{
    echo "failed";
}

?>