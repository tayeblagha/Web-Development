<?php 
$cnx=mysqli_connect("localhost","root","","mini");
$x=$_GET["id"];
mysqli_query($cnx,"delete  from voiture where id={$x}");
header("location:voiture.php");
?>