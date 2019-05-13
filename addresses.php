<?php require_once 'partials/_header.php'; ?>
<main class="addresses">
    <div class="container">
        <div class="row">
            <?php require 'partials/_sidebar-account.php'; ?>
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 page-content">
                <h1 class="page-heading">Moje adresy</h1>
                <p class="text-muted">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum velit architecto quas illo
                    officia, praesentium optio fugiat aperiam repellendus quidem magni quaerat at deleniti blanditiis,
                    impedit ab repudiandae accusantium sit.</p>
                <p>
                    <a href="#" class="btn btn-success" onclick="alert('Ekran niedostępny')"><i
                            class="fa fa-plus-circle"></i> Dodaj adres</a>
                </p>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dom</h4>
                                <p class="card-text">
                                    <b>Jan Kowalski</b><br>
                                    ul. Przykładowa 34<br>
                                    28-200 Staszów<br>
                                    <br>
                                    <hr>
                                    tel. 888-757-126
                                </p>
                                <div class="d-flex justify-content-between" role="group">
                                    <a href="#" onclick="alert('Funkcja niedostępna')" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    <a href="/address-edit.php" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Praca</h4>
                                <p class="card-text">
                                    <b>Jan Kowalski</b><br>
                                    Jan-Bud<br>
                                    ul. Targowa 12/2<br>
                                    23-333 Mielec<br>
                                    <hr>
                                    tel. (17)886-55-66
                                    </p>
                                    <div class="d-flex justify-content-between" role="group">
                                    <a href="#" onclick="alert('Funkcja niedostępna')" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    <a href="/address-edit.php" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once 'partials/_footer.php'; ?>