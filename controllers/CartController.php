<?php


class CartController {

    public function actionIndex() {
        $categories = Category::getCategoriesList();

        // отримати товари із сесії
        $productsInCart = Cart::getProducts();

        // отримати повністю інофрмацію про товари
        if($productsInCart) {
            $productsIds = array_keys($productsInCart);
            $products = Cart::getProductsByIds($productsIds);

             // визначити загальну суму
             $totalPrice = Cart::getTotalPrice($products);
        }

        require_once(ROOT . "/views/cart/index.php");
        return true;
    }

    public function actionAdd($id) {

        // add product to cart
        Cart::addProduct($id);

        $referer = $_SERVER["HTTP_REFERER"];
        header("location: $referer");
        return true;
    }

    public function actionDelete($id){
        Cart::deleteProduct($id);

        $referer = $_SERVER["HTTP_REFERER"];
        header("location: $referer");
        return true;
    }

    public function actionCheckout() {

        $categories = Category::getCategoriesList();

        $result = false;
        $errors = false;

        if(isset($_POST["submit"])) {
            // Форма відправлена

            $userName = $_POST["userName"];
            $userPhone = $_POST["userPhone"];
            $userComment = $_POST["userComment"];


            if(!User::checkName($userName)) {
                $errors[] = "Name should be longer than 2 characters";
            }

            if(!User::checkPhone($userPhone)) {
                $errors[] = "Incorrect phone";
            }

            if($errors == false) {
                // Форма заповнена коректно

                $productsInCart = Cart::getProducts();
                $userId = false;
                if(!User::isGuest()) {
                    $userId = User::checkLogged();
                }

                $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);

                if($result) {
                    Cart::clear();
                }


            }
            else {
                 // Форма заповнена не коректно
                 $productsInCart = Cart::getProducts();
                 $productsIds = array_keys($productsInCart);
                 $products = Cart::getProductsByIds($productsIds);
                 $totalPrice = Cart::getTotalPrice($products);
                 $totalQuantity = Cart::countItems();
            }



        }
        else {
            // Форма не відправлена

            $productsInCart = Cart::getProducts();

            if($productsInCart == false) {
                // Якщо немає товарів в корзині
                header("location: /");
            }
            else {
                $productsIds = array_keys($productsInCart);
                $products = Cart::getProductsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();

                $userName = "";
                $userPhone = "";
                $userComment = "";


                if(!User::isGuest()) {

                    $userId = User::checkLogged();
                    $user = User::getUserById($userId);

                    $userName = $user["name"];
                }


            }



        }



        require_once(ROOT . '/views/cart/checkout.php');

        return true;
    }




}