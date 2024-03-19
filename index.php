<?php

 
  include 'data.php';
  include 'models.php';
  $data = $_SESSION["data"];

  $products = [];

  foreach($data as $p) {
    $products []= new Product($p);
  }




?>
<html>
  <body>
    <h1>PRODOTTI</h1>

    <script>
        // Fetching data con JS
        //fetch("API/products")
        //.then((res) => res.json())
        //.then((data) => console.log('DATA', data));
    </script>
 <table>
  <tr>
    <td>title</td>
    <td>description</td>
    <td>qty</td>
    <td>image</td>
  </tr>
  <?php 
  //loop con key ,value (non necessariamente una mappa!!!!)
      foreach($products as $i => $d): ?>     
      <tr>
        <td><a href="detail.php?index=<?=$i?>"> <?= $d->title ?></a> </td>
        <td> <?= $d->description?></td>
        <td><?= $d->qty ?></td>
        <td><img src="<?=$d->image ?>"></td>
      </tr>
      <?php endforeach; ?>
      </table>








 








    <table>
    <?php foreach ($data as $i => $product): ?>
    <tr>
      <td><a href="detail.php?id=<?= $i ?>"> <?= $product->title ?> </a></td>
    </tr>
    <?php endforeach; ?>
    </table>
  </body>
</html>