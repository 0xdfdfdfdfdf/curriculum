<?php 
  function calc($price, $quantity) {
    return $price * $quantity;
  }

  $prices = ["りんご" => 150, "みかん" => 75, "もも" => 1500];
  foreach ($prices as $product => $price) {
     $new_price = calc($price, 2);
     echo "${product}は${new_price}円です<br />";
  }
?>
