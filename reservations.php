<?php
session_start();
    $nume="";
    $localitate="";
    $telefon="";
    $mail="";
    $detalii="";
    $id=0;
    $update = false;
$db=mysqli_connect("localhost","root","","login");


if(isset($_POST['add'])){
    $nume=$_POST['nume'];
    $localitate=$_POST['localitate'];
    $telefon=$_POST['telefon'];
    $mail=$_POST['mail'];
    $detalii=$_POST['detalii'];
    $query="INSERT INTO rezervari (nume,localitate,telefon,mail,detalii) VALUES ('$nume','$localitate','$telefon','$mail','$detali')";
    mysqli_query($db,$query);
    $_SESSION['msg']="Rezervarea a fost adaugata";
    header("Location: rezervari.php");

}


if(isset($_POST['update'])){
    $nume=mysqli_real_escape_string($db,$_POST['nume']);
    $localitate=mysqli_real_escape_string($db,$_POST['localitate']);
    $telefon=mysqli_real_escape_string($db,$_POST['telefon']);
    $mail=mysqli_real_escape_string($db,$_POST['mail']);
    $detalii=mysqli_real_escape_string($db,$_POST['detalii']);
    $id=mysqli_real_escape_string($db,$_POST['id']);
    mysqli_query($db, "UPDATE rezervari SET nume='$nume', localitate='$localitate', telefon='$telefon', mail='$mail', detalii='$detalii' where id=$id");
    $_SESSION['msg']="Rezervarea a fost actualizata";
    header("Location: rezervari.php");
}


if(isset($_GET['del'])){
    
    $id=$_GET['del'];
    mysqli_query($db,"delete from rezervari where id='$id'");
    $_SESSION['msg']="Rezervarea a fost stearsa";
    header("Location: rezervari.php");
}


$result2=mysqli_query($db,"select * from rezervari") or die("Failed to query database ".mysql_error());


?>