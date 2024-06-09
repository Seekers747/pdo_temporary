<?php

require 'db.php';

$product_naam = '';
$prijs = '';
$omschrijving = '';

if (isset($_POST['versturen'])) {
    $product_naam = $_POST["product_naam"];
    $prijs = $_POST["prijs_per_stuk"];
    $omschrijving = $_POST["omschrijving"];
}

$query='insert into producten (product_naam, prijs_per_stuk, omschrijving) values (?, ?, ?)';
$result=$pdo->prepare($query);
$data=array($product_naam, $prijs, $omschrijving);
$result->execute($data);

?>

<form method="post">
    <input type="text" name="product_naam" placeholder="product naam"><br>
    <input type="number" name="prijs_per_stuk" placeholder="prijs"><br>
    <input type="text" name="omschrijving" placeholder="omschrijving"><br>
    <input type="submit" name="versturen"><br>
</form>