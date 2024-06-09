<?php

require 'db.php';

$product_code = '';
$product_naam = '';
$prijs = '';
$omschrijving = '';

if (isset($_POST['versturen'])) {
    $product_code = $_POST['product_code'];
    $product_naam = $_POST["product_naam"];
    $prijs = $_POST["prijs_per_stuk"];
    $omschrijving = $_POST["omschrijving"];

    $sql = "UPDATE producten SET product_naam=?, prijs_per_stuk=?, omschrijving=? WHERE product_code=?";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$product_naam, $prijs, $omschrijving, $product_code]);
}

?>

<form method="post">
    <label>vul hier de id van welke product wil veranderen en wat het moet worden:</label><br>
    <input type="number" name="product_code" placeholder="id"><br>
    <input type="text" name="product_naam" placeholder="product naam"><br>
    <input type="number" name="prijs_per_stuk" placeholder="prijs"><br>
    <input type="text" name="omschrijving" placeholder="omschrijving"><br>
    <input type="submit" name="versturen"><br>
</form>