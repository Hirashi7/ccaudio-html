<?php require_once 'partials/_header.php'; ?>
<main class="orders">
    <div class="container">
        <div class="row">
            <?php require 'partials/_sidebar-account.php'; ?>
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 page-content">
                <h1 class="page-heading">Moje zamówienia</h1>
                <p class="text-muted">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum velit architecto quas illo officia, praesentium optio fugiat aperiam repellendus quidem magni quaerat at deleniti blanditiis, impedit ab repudiandae accusantium sit.</p>
                <?php require 'partials/_orders-table.php';?>
            </div>
        </div>
    </div>
</main>
<?php require_once 'partials/_footer.php'; ?>