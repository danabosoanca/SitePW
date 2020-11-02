<?php
session_start();
    $nume="";
     $mail="";
      $mesaj="";
    $id=0;
    $update = false;
$db=mysqli_connect("localhost","root","","login");

if(isset($_POST['add'])){
    $nume=$_POST['nume'];
    $mail=$_POST['mail'];
    $detalii=$_POST['mesaj'];
    $query="INSERT INTO contact (nume,mail,mesaj) VALUES ('$nume','$mail','$mesaj')";
    mysqli_query($db,$query);
    $_SESSION['msg']="Mesajul a fost adaugat";
    header("Location: mesaje.php");

}

if(isset($_POST['update'])){
    $nume=mysqli_real_escape_string($db,$_POST['nume']);
    
    $mail=mysqli_real_escape_string($db,$_POST['mail']);
    $mesaj=mysqli_real_escape_string($db,$_POST['mesaj']);
    $id=mysqli_real_escape_string($db,$_POST['id']);
    mysqli_query($db, "UPDATE contact SET nume='$nume',  mail='$mail', mesaj='$mesaj' where id=$id");
    $_SESSION['msg']="Mesajul a fost actualizat";
    header("Location: mesaje.php");
}

if(isset($_GET['del'])){
    
    $id=$_GET['del'];
    mysqli_query($db,"delete from contact where id='$id'");
    $_SESSION['msg']="Mesajul a fost sters";
    header("Location: mesaje.php");
}



$result2=mysqli_query($db,"select * from contact") or die("Failed to query database ".mysql_error());

?>