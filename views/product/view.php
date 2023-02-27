<?php include(ROOT . './views/layouts/header.php') ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Catalog</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
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
                            </div><!--/category-products-->

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="product-details"><!--product-details-->
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="view-product">
                                        <img src="<?php echo Product::getImage($product['id']); ?>" alt="" class="productImg" />
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="product-information"><!--/product-information-->
                                    <?php if($product['is_new']):?>
                                        <img height="50px" src="/template/images/product-details/new.png" class="newarrival" alt="" />
                                    <?php endif;?>
                                        <h2><?= $product["name"] ?></h2>
                                        <p>Item code: <?= $product["code"] ?></p>
                                        <span>
                                            <span>US $<?= $product["price"] ?></span>
                                            <label>Quantity:</label>
                                            <input type="text" value="3" />
                                            <a href="/cart/add/<?= $product["id"] ?>" type="button" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to cart
                                            </a>
                                        </span>
                                        <p><b>Available:</b>
                                            <?php   if($product["status"])
                                                        echo "In stock";
                                                    else
                                                        echo "Out of stock";
                                            ?>
                                        </p>
                                        <p><b>Condition:</b> New</p>
                                        <p><b>Manufacturer:</b> <?= $product["brand"] ?></p>
                                    </div><!--/product-information-->
                                </div>
                            </div>
                            <div class="row">                                
                                <div class="col-sm-12">
                                    <h5>Description</h5>
                                    <p><?= $product["description"] ?></p>
                                </div>
                            </div>
                        </div><!--/product-details-->

                    </div>
                </div>
            </div>
        </section>
        

        <br/>
        <br/>
        
<?php include(ROOT . './views/layouts/footer.php') ?>