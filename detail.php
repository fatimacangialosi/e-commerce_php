<?php
  include 'models.php';
  session_start();
  $data = $_SESSION["data"];

  $index = $_GET['index'];
  
  //$product = $data[$index];

  $products = [];

  foreach($data as $p) {
    $products []= new Product($p);
  }

  $product = $products[$index];

?>

<html>

  <body>

  <h1> DETTAGLI PRODOTTO </h1>
  <table>
  <tr>
    <td>title</td>
    <td>description</td>
    <td>qty</td>
    <td>prezzo</td>
    <td>image</td>
  </tr>
 <tr>
    <td> <?= $product->title ?> </td>
    <td> <?= $product->description?></td>
    <td> <?= $product->qty ?></td>
    <td> <?= $product->getDiscountedPrice() ?></td>
    <td><img src="<?=$product->image ?>"></td>
  </tr>
     
</table>


  <a href="./"> Lista prodotti </a>

  </body>
 
</html>
