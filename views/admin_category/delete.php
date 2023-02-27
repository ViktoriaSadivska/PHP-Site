<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin/category">Category management</a></li>
                    <li class="active">Delete category</li>
                </ol>
            </div>


            <h4>Delete category #<?php echo $id; ?></h4>


            <p>Are you sure, you want to delete this category?</p>

            <form method="post">
                <input class="btn btn-warning" type="submit" name="submit" value="Delete" />
            </form>

        </div>
    </div>
</section>
<div class="spacer"></div>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

