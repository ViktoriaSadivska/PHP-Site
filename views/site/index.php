<?php include(ROOT . '/views/layouts/header.php') ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Catalog</h2>
                            <div class="panel-group category-products">
                                
                                <?php foreach($categories as $categoryItem): ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="/category/<?= $categoryItem["id"] ?>">
                                                    <?= $categoryItem["name"] ?>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                               <?php endforeach ?>
                            
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Latest items</h2>
                            
                            <?php foreach($latestProducts as $product): ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                        <img src="<?php echo Product::getImage($product['id']); ?>" alt="" class="productImg" />
                                            <h2><?= $product["price"] ?> $</h2>
                                            <p>
                                                <a class="productLink" href="/product/<?= $product["id"] ?>">
                                                    <?= $product["name"] ?>
                                                </a>
                                            </p>
                                            <a href="/cart/add/<?= $product["id"] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <?php if($product["is_new"]): ?>
                                            <img src="/template/images/home/new.png" class="new" alt="" />
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div><!--features_items-->

                        <div class="recommended_items"><!--recommended_items-->
                            <h2 class="title text-center">Recommended items</h2>

                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">	
                                    <?php foreach($recommendedProducts as $product): ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                        <img src="<?php echo Product::getImage($product['id']); ?>" alt="" class="productImg" />
                                            <h2><?= $product["price"] ?> $</h2>
                                            <p>
                                                <a class="productLink" href="/product/<?= $product["id"] ?>">
                                                    <?= $product["name"] ?>
                                                </a>
                                            </p>
                                            <a href="/cart/add/<?= $product["id"] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <?php if($product["is_new"]): ?>
                                            <img src="/template/images/home/new.png" class="new" alt="" />
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                                        
                                    
                                       
                                     </div>
                                        </div>		
                            </div>
                        </div><!--/recommended_items-->

                    </div>
                </div>
            </div>
        </section>


<?php include(ROOT. '/views/layouts/footer.php') ?>

