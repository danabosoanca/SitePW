<?php
session_start();
    $activitate="";
    $pret="";
    $durata="";
    $id=0;
    $update = false;
$db=mysqli_connect("localhost","root","","login");

if(isset($_POST['add'])){
    $activitate=$_POST['activitate'];
    $pret=$_POST['pret'];
    $durata=$_POST['durata'];
    $query="INSERT INTO preturi (activitate,pret,durata) VALUES ('$activitate','$pret','$durata')";
    mysqli_query($db,$query);
    $_SESSION['msg']="Activitatea a fost adaugata";
    header("Location: crud.php");

}

if(isset($_POST['update'])){
    $activitate=mysqli_real_escape_string($db,$_POST['activitate']);
    $pret=mysqli_real_escape_string($db,$_POST['pret']);
    $durata=mysqli_real_escape_string($db,$_POST['durata']);
    $id=mysqli_real_escape_string($db,$_POST['id']);
    mysqli_query($db, "UPDATE preturi SET activitate='$activitate', pret='$pret', durata='$durata' where id=$id");
    $_SESSION['msg']="Activitatea a fost actualizata";
    header("Location: crud.php");
}

if(isset($_GET['del'])){
    
    $id=$_GET['del'];
    mysqli_query($db,"delete from preturi where id='$id'");
    $_SESSION['msg']="Activitatea a fost stearsa";
    header("Location: crud.php");
}



$result2=mysqli_query($db,"select * from preturi ") or die("Failed to query database ".mysql_error());






?>