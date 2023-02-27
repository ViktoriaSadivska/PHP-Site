<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <h1 class="text-center">User account</h1>
            
            <h3 class="contacts">Hello, <?php echo $user['name'];?>!</h3>
            <div class="d-grid gap-2">
                <button class="btn btn-lg btn-warning" type="button">
                    <a class="cabinetAction" href="/cabinet/edit">Edit account</a>
                </button>
                <button class="btn btn-lg btn-warning" type="button">
                    <a class="cabinetAction" href="/cabinet/history">Purchase history</a>
                </button>
            </div>
        </div>
    </div>
</section>
<div class="spacer"></div>

<?php include ROOT . '/views/layouts/footer.php'; ?>