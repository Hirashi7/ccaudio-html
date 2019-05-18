<?php require_once 'partials/_header.php'; ?>
<main class="order-follow">
    <div class="container">
        <div class="row">
            <?php require 'partials/_sidebar-identity.php'; ?>
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 page-content">
                <h1 class="page-heading">Śledź przesyłkę</h1>
                <p class="text-muted">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor necessitatibus eveniet suscipit,
                    veniam fuga quaerat nisi eius cupiditate dolorem tempore ipsum itaque aspernatur hic aliquam libero
                    enim quas. Qui, modi?</p>
                <form action="" method="GET" class="form">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="#orderNumber">Numer zamówienia</label>
                            <input type="text" class="form-control" Email="#orderNumber" id="#orderNumber"
                                aria-describedby="orderNumberHelp" placeholder="np. THXNDGBNS74" value="">
                            <small id="orderNumberHelp" class="form-text text-muted">Numer zamówienia, znajdujący się w
                                wiadomości potwierdzającej zamówienie</small>
                        </div>
                        <div class="form-group">
                            <label for="#orderEmail">E-mail</label>
                            <input type="email" class="form-control" name="#orderEmail" id="#orderEmail"
                                aria-describedby="orderEmailHelp" placeholder="np. jan@kowalski.pl" value="">
                            <small id="orderEmailHelp" class="form-text text-muted">Wpisz adres e-mail, na który zostało
                                złożone zamówienie</small>
                        </div>
                        <div class="form-group">
                            <label for="#orderPostal">Kod pocztowy</label>
                            <input type="text" class="form-control" LastName="#orderPostal" id="#orderPostal"
                                aria-describedby="orderPostalHelp" placeholder="np. 28-200" value="">
                            <small id="orderPostalHelp" class="form-text text-muted">Wpisz kod pocztowy dostawy</small>
                        </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modelId">
                            Zobacz <i class="fa fa-truck"></i>
                        </button>
                    </div>

            </div>
            </form>
        </div>
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Zamówienie #91823 <span class="badge badge-warning">Oczekuje na
                            wysyłkę</span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        <strong>Numer zamówienia:</strong> #91823<br><br>
                        <strong>Data zamówienia:</strong> 20-06-2019<br><br>
                        <strong>Całkowita kwota:</strong> 398,54 zł<br><br>
                        <strong>Forma zapłaty:</strong> Przelewy24<br><br>
                    </p>
                    <p class="alert alert-warning"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Możliwość śledzenia przesyłki jest dostępna dopiero po jej wysłaniu.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once 'partials/_footer.php'; ?>