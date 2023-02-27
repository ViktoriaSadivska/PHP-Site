<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <h4 class="text-center historyHeader">Item management</h4>

            <a href="/admin/product/create" class="btn btn-default back">
            <button class="btn btn-warning" type="button">
                <i class="fa fa-plus"></i> Add item
            </button> 
            </a>
            
            <h4>Items list</h4>

            <br/>

            <table class="table-hover table-bordered table">
                <tr class="pinkBg">
                    <th>Item ID</th>
                    <th>Item code</th>
                    <th>Item name</th>
                    <th>Price</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($productsList as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?></td>  
                        <td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Edit"><i class="fa fa-pencil-square-o purple"></i></a></td>
                        <td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Delete"><i class="fa fa-times purple"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>
<div class="spacer"></div>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

