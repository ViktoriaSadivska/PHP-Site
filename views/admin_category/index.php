<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <h4 class="text-center historyHeader">Category management</h4>

            <a href="/admin/category/create" class="btn btn-default back">
            <button class="btn btn-warning" type="button">
                <i class="fa fa-plus"></i> Add category
            </button> 
            </a>

            <h4>Categories list</h4>

            <br/>

            <table class="table-hover table-bordered table">
                <tr class="pinkBg">
                    <th>Category ID</th>
                    <th>Category name</th>
                    <th>Sort order</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($categoriesList as $category): ?>
                    <tr>
                        <td><?php echo $category['id']; ?></td>
                        <td><?php echo $category['name']; ?></td>
                        <td><?php echo $category['sort_order']; ?></td>
                        <td><?php echo Category::getStatusText($category['status']); ?></td>  
                        <td><a href="/admin/category/update/<?php echo $category['id']; ?>" title="Edit"><i class="fa fa-pencil-square-o purple"></i></a></td>
                        <td><a href="/admin/category/delete/<?php echo $category['id']; ?>" title="Delete"><i class="fa fa-times purple"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            
        </div>
    </div>
</section>
<div class="spacer"></div>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

