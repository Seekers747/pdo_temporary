<?php

require 'db.php';

echo "<br>";

//Je kan alles in een query selecteren door "query()" te gebruiken.

$allselect = $pdo->query("SELECT * FROM producten");
$res_allselect = $allselect->fetchAll();

//Je kan een row met placeholders selecteren door "execute([$naam van de column]);" te gebruiken
//Je kan een row met na selecteren door "execute(['column naam' => $variabele naam]); 

$product7_select = $pdo->query("SELECT * FROM producten WHERE product_code = '7'");
$res_product7_select = $product7_select->fetchAll();

$product10_select = $pdo->query("SELECT * FROM producten WHERE product_code = '10'");
$res_product10_select = $product10_select->fetchAll();

?>

<html>
    <head>
        <style>
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
        </style>
    </head>
    <table>
        <tr>
            <th>productcode</th>
            <th>productnaam</th>
            <th>prijs per stuk</th>
            <th>omschrijving</th>
        </tr>
        <?php
            foreach ($res_allselect as $row) {
                echo "<tr>";
                echo "<td>" . $row['product_code'] . "</td>";
                echo "<td>" . $row['product_naam'] . "</td>";
                echo "<td>" . $row['prijs_per_stuk'] . "</td>";
                echo "<td>" . $row['omschrijving'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>

    <br>

    <table>
        <tr>
            <th>productcode</th>
            <th>productnaam</th>
            <th>prijs per stuk</th>
            <th>omschrijving</th>
        </tr>
        <?php
            foreach ($res_product7_select as $row_product7) {
                echo "<tr>";
                echo "<td>" . $row_product7['product_code'] . "</td>";
                echo "<td>" . $row_product7['product_naam'] . "</td>";
                echo "<td>" . $row_product7['prijs_per_stuk'] . "</td>";
                echo "<td>" . $row_product7['omschrijving'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
    
    <br>

    <table>
        <tr>
            <th>productcode</th>
            <th>productnaam</th>
            <th>prijs per stuk</th>
            <th>omschrijving</th>
        </tr>
        <?php
            foreach ($res_product10_select as $row_product10) {
                echo "<tr>";
                echo "<td>" . $row_product10['product_code'] . "</td>";
                echo "<td>" . $row_product10['product_naam'] . "</td>";
                echo "<td>" . $row_product10['prijs_per_stuk'] . "</td>";
                echo "<td>" . $row_product10['omschrijving'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</html>