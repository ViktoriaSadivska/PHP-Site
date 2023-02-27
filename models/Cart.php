<?php


class Cart {
    

    public static function addProduct($id) {

        $productsInCart = [];


        if(isset($_SESSION["products"])) {
            $productsInCart = $_SESSION["products"];
        }

        if(array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]++;
        } else {
            $productsInCart[$id] = 1;
        }

        $_SESSION["products"] = $productsInCart;

       

    }

    public static function deleteProduct($id){
        $productsInCart = $_SESSION["products"];
        unset($productsInCart[$id]);
        $_SESSION["products"] = $productsInCart;
    }


    public static function countItems() {

        $count = 0;
        if(isset($_SESSION["products"])) {

            foreach ($_SESSION["products"] as $id => $quantity) {
               $count += $quantity;
            }
        }
        return $count;

    }



    public static function getProducts() {
        if(isset($_SESSION["products"])) {
            return $_SESSION["products"];
        }
        return false;
    }



    public static function getProductsByIds($idsArray) {

        $idsString = implode(', ', $idsArray);
        $db = Db::getConnection();
        $query = "SELECT * FROM product WHERE id IN ($idsString)";
        $result = $db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }



    public static function getTotalPrice($products) {

        $productsInCart = self::getProducts();

        $total = 0;

        if($productsInCart) {
            foreach($products as $product) {
                $total += $product['price'] * $productsInCart[$product['id']];
            }
        }

        return $total;

    }



    public static function clear() {
        if(isset($_SESSION["products"])) {
            unset($_SESSION["products"]);
        }
    }


}