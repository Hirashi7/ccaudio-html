<?php require_once 'partials/_header.php'; ?>
<main class="my-account">
    <section class="page-section">
        <div class="container">
            <div class="row">
                <?php require 'partials/_sidebar-account.php'; ?>
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 page-content">
                    <h1 class="page-heading">Witaj, Jan Kowalski!</h1>
                    <div class="row">
                        <div class="col-xs-12 col-6">
                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. A enim
                                officia totam sunt accusantium nisi, modi provident dolore quae dignissimos neque illo
                                perferendis, asperiores tempore maxime voluptatem animi voluptatum. Beatae.</p>
                            <a href="/?logout=true" class="btn btn-outline-primary">Wyloguj</a>
                        </div>
                        <div class="col-xs-12 col-6">
                            <div class="card">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="/user-edit.php">
                                            Moje dane</a></li>
                                    <li class="list-group-item"><a href="/addresses.php">
                                            Moje adresy</a></li>
                                    <li class="list-group-item"><a href="/orders.php">Moje zamówienia</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col-12">
                        <h6>Ostatnie zamówienia</h6>
                            <?php require 'partials/_orders-table.php';?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require_once 'partials/_footer.php'; ?>