<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin/order">Order management</a></li>
                    <li class="active">View order</li>
                </ol>
            </div>


            <h4 class="text-center historyHeader">View order #<?php echo $order['id']; ?></h4>
            <br/>




            <h5>Order details</details></h5>
            <table class="table-admin-small table-bordered table-striped table-light table">
                <tr>
                    <td>Order ID</td>
                    <td><?php echo $order['id']; ?></td>
                </tr>
                <tr>
                    <td>User name</td>
                    <td><?php echo $order['user_name']; ?></td>
                </tr>
                <tr>
                    <td>User phone</td>
                    <td><?php echo $order['user_phone']; ?></td>
                </tr>
                <tr>
                    <td>Comments</td>
                    <td><?php echo $order['user_comment']; ?></td>
                </tr>
                <?php if ($order['user_id'] != 0): ?>
                    <tr>
                        <td>User ID</td>
                        <td><?php echo $order['user_id']; ?></td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td><b>Order status</b></td>
                    <td><?php echo Order::getStatusText($order['status']); ?></td>
                </tr>
                <tr>
                    <td><b>Order date</b></td>
                    <td><?php echo $order['date']; ?></td>
                </tr>
            </table>

            <h5>Items in the order</h5>

            <table class="table-admin-medium table-bordered table-light table ">
                <tr>
                    <th>Item ID</th>
                    <th>Item code</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td>$<?php echo $product['price']; ?></td>
                        <td><?php echo $productsQuantity[$product['id']]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <a href="/admin/order/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Back </a>
        </div>


</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

