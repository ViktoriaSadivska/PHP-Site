<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
        <?php if ($ordersList): ?>
            <h4 class="text-center historyHeader">Purchase history</h4>

            <br/>

            <table class="table-hover table-bordered table">
                <tr class="pinkBg">
                    <th>Order ID</th>
                    <th>Comments</th>
                    <th>Data</th>
                    <th>Items</th>
                    <th>Order status<th>
                </tr>
                <?php foreach ($ordersList as $order): ?>
                    <tr class="table-light">
                        <td><?php echo $order['id']; ?></td>
                        <td><?php echo $order['user_comment']; ?></td>
                        <td><?php echo $order['date']; ?></td>
                        <td><table class="table-hover table-bordered table">
                            <tr class="table-warning">
                                <th>Item</th>
                                <th>Quantity</th>
                            </tr>
                                <?php foreach (json_decode($order['products']) as $key => $value):
                                     ?>
                            <tr>
                                <td><?php echo Product::getProductById($key)['name']; ?></td>
                                <td><?php echo $value; ?></td>   
                            </tr>
                            <?php endforeach;  ?>
                        </table></td>  
                        <td><?php echo Order::getStatusText($order['status']); ?></td>  
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>You don't have any orders yet</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<div class="spacer"></div>

<?php include ROOT . '/views/layouts/footer.php'; ?>