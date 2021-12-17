<html>
<?php 
$conx=mysqli_connect("localhost","root","","mini");
$req=mysqli_query($conx,"select * from voiture");
echo "<center> <h2> Liste de voiture Louées </h2> </center> " ;
echo "<center><table border='1' width='100%'></center>";
echo "<th> id: </th>" ;
echo "<th> modele: </th>" ;
echo "<th> date de sortie:: </th>" ;
echo "<th> date de retour: </th>" ;
echo "<th> jours occupé </th>" ;
echo "<th> Prix </th>" ;
while($f=mysqli_fetch_array($req)){
echo "<tr> ";
echo "<td>" .$f["id"]. "</td>";
echo "<td>" .$f["modele"]. "</td>";
echo "<td>" .$f["ds"]. "</td>";
echo "<td>" .$f["dr"]. "</td>";
$x=$f["ds"];
$y1=strtotime($x);
$z=$f["dr"];
$z1=strtotime($z);
$d=(($z1-$y1)/(3600*24));
$p=$f["price"];
$price=($p*$d);
echo "<td>" .$d. "</td>";
echo "<td>" .$price. "</td>";
echo"<td> <a href='del.php?id={$f["id"]}'> supp </a> </td>";
echo"</tr>";
}
echo"</table>";
?>

