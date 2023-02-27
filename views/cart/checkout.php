<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                    <h2 class="text-center historyHeader">Cart</h2>


                    <?php if ($result): ?>
                        <p>Order is processed. We'll give you a call</p>
                    <?php else: ?>

                        <h3>Selected items: <?php echo $totalQuantity; ?></h3>
                        <h3>Final price: <?php echo $totalPrice; ?>, $</h3>

                        <?php if (!$result): ?>                        

                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <p>To proceed with the order fill in this form. Our manager will contact you.</p>
                                        </br>
                                        </br>
                                <div class="login-form">
                                    <form action="#" method="post">

                                        <p>Your name</p>
                                        <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>"/>

                                        <p>Phone number</p>
                                        <input type="text" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>"/>

                                        <p>Comments</p>
                                        <input type="text" name="userComment"  value="<?php echo $userComment; ?>"/>

                                        <br/>
                                        <br/>
                                        <input type="submit" name="submit" value="Checkout" />
                                    </form>
                                </div>

                        <?php endif; ?>

                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</section>
<div class="spacer"></div>

<?php include ROOT . '/views/layouts/footer.php'; ?>