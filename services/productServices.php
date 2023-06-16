<?php

// Call model
require_once "objects/ProductsObjects.php";
$products = ProductObject::getAllProducts();
$json_response = json_encode($products);

echo $json_response;
