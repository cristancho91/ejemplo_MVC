<?php

require_once "ddbb/DBConexion.php";

class ProductObject {
    public static function getAllProducts() {
        $db = DBConexion::connection();
        $data = $db->query("SELECT cod, short_name, nombre, pvp FROM products");
        $products = array();

        while ( $row = $data->fetch_assoc() ) {
            $product = $row;
            $products[] = $product;
        }

        return $products;
    }
}