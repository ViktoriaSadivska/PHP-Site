<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Catalog</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Cart</h2>
                    
                    <?php if ($productsInCart): ?>
                        <p>Items you chose:</p>
                        <table class="table-hover table-bordered table">
                            <tr class="pinkBg">
                                <th>Item code</th>
                                <th>Name</th>
                                <th>Price, $</th>
                                <th>Quantity, шт</th>
                                <th>Delete</th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr class="table-light">
                                    <td><?php echo $product['code'];?></td>
                                    <td>
                                        <a class="productLink" href="/product/<?php echo $product['id'];?>">
                                            <?php echo $product['name'];?>
                                        </a>
                                    </td>
                                    <td><?php echo $product['price'];?></td>
                                    <td><?php echo $productsInCart[$product['id']];?></td> 
                                    <td>
                                        <a href="/cart/delete/<?php echo $product['id'];?>">
                                            <i class="fa fa-times purple"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                <tr class="table-warning">
                                    <td colspan="4">Final price, $:</td>
                                    <td><?php echo $totalPrice;?></td>
                                </tr>
                            
                        </table>
                        
                        <a class="btn btn-default checkout purple" href="/cart/checkout"><i class="fa fa-shopping-cart purple"></i> Checkout </a>
                    <?php else: ?>
                        <p>Your cart is empty</p>
                        
                        <a class="btn btn-default checkout purple" href="/"><i class="fa fa-shopping-cart"></i> Back to shop </a>
                    <?php endif; ?>

                </div>

                
                
            </div>
        </div>
    </div>
</section>
<div class="spacer"></div>

<?php include ROOT . '/views/layouts/footer.php'; ?>