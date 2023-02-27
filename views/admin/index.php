<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            
            <br/>
            
            <h4>Hello, admin!</h4>
            
            <br/>
            
            <p>These options are available to you:</p>
            
            <br/>
            <div class="d-grid gap-2">
                <button class="btn btn-lg btn-warning" type="button">
                    <a class="cabinetAction" href="/admin/product">Item management</a>
                </button>
                <button class="btn btn-lg btn-warning" type="button">
                    <a class="cabinetAction" href="/admin/category">Category management</a>
                </button>
                <button class="btn btn-lg btn-warning" type="button">
                    <a class="cabinetAction" href="/admin/order">Order management</a>
                </button>
            </div>
            
        </div>
    </div>
</section>
<div class="spacer"></div>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

