<?php require_once 'partials/_header.php'; ?>
<main class="my-account">
    <section class="page-section">
        <div class="container">
            <div class="row">
                <?php require 'partials/_sidebar-account.php'; ?>
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 page-content">
                    <h1 class="page-heading">Ulubione</h1>
                    <div class="row">
                     <?php require 'partials/_products-line.php'; ?>
                     <div class="col-12 d-flex justify-content-center">
                        <a href="/category.php" class="btn btn-primary btn-lg">
                            Przejdź do sklepu
                        </a>
                     </d>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require_once 'partials/_footer.php'; ?>