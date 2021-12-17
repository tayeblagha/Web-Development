<?php
$cnx=mysqli_connect("localhost","root","","mini");
$x=$_GET["id"];
$y=$_GET["modele"];
$w=$_GET["ds"];
$z=$_GET["dr"];
$p=$_GET["price"];
mysqli_query($cnx,"insert into voiture values ({$x},'{$y}','{$w}','{$z}',{$p})");
header("location:voiture.php");
?>