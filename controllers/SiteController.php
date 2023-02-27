<?php



class SiteController {

    public function actionIndex() {

        
        $categories = Category::getCategoriesList();

        $latestProducts = Product::getLatestProducts();
        $recommendedProducts = Product::getRecommendedProducts();


        require_once(ROOT . '/views/site/index.php');




        return true;
    }



}