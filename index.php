<?php 

$longeur = $_POST['longueur'];
$largeur = $_POST['largeur'];
$surface = $longeur*$largeur;

var_dump ($longeur);

echo "$longeur";


?>

<form action="" method="post";>

Longeur: <input type="text" name="longueur"><br><br>
Largeur: <input type="text" name="largeur"><br><br>
<input type="submit" value="calculer !"></input>

</form>

<?php 

echo "Surface = $surface";

?>