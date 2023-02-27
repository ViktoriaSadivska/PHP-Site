<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin/product">Item managment</a></li>
                    <li class="active">Edit item</li>
                </ol>
            </div>


            <h4>Add new item</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Item name</p>
                        <input type="text" name="name" placeholder="" value="">

                        <p>Item code</p>
                        <input type="text" name="code" placeholder="" value="">

                        <p>Price, $</p>
                        <input type="text" name="price" placeholder="" value="">

                        <p>Category</p>
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>">
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        <br/><br/>

                        <p>Manufacturer</p>
                        <input type="text" name="brand" placeholder="" value="">

                        <p>Item image</p>
                        <input type="file" name="image" placeholder="" value="">

                        <p>Description</p>
                        <textarea name="description"></textarea>

                        <br/><br/>

                        <p>Availability</p>
                        <select name="availability">
                            <option value="1" selected="selected">In stock</option>
                            <option value="0">Out of stock</option>
                        </select>

                        <br/><br/>

                        <p>New arrival</p>
                        <select name="is_new">
                            <option value="1" selected="selected">Yes</option>
                            <option value="0">No</option>
                        </select>

                        <br/><br/>

                        <p>Recommended</p>
                        <select name="is_recommended">
                            <option value="1" selected="selected">Yes</option>
                            <option value="0">No</option>
                        </select>

                        <br/><br/>

                        <p>Status</p>
                        <select name="status">
                            <option value="1" selected="selected">Visible</option>
                            <option value="0">Hidden</option>
                        </select>

                        <br/><br/>

                        <input type="submit" name="submit" class="btn btn-default" value="Save">

                        <br/><br/>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="spacer"></div>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

