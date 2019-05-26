<?php require_once 'partials/_header.php'; ?>
<main class="contact">
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-3">
                    <?php require 'partials/_block-sidebar-contact.php'; ?>
                </div>
                <div class="col-xs-12 col-9">
                    <h1 class="page-heading">Skontaktuj się z nami</h1>
                    <form action="" method="GET" class="form">
                        <div class="form-group">
                            <label for="#contactName">Imie</label>
                            <input type="text" class="form-control" Email="#contactName" id="#contactName"
                                aria-describedby="contactNameHelp" placeholder="np. Jan" value="">
                            <small id="contactNameHelp" class="form-text text-muted">Wpisz swoje imie</small>
                        </div>
                        <div class="form-group">
                            <label for="#contactLastName">Nazwisko</label>
                            <input type="text" class="form-control" name="#contactLastName" id="#contactLastName"
                                aria-describedby="contactLastNameHelp" placeholder="np. Kowalski" value="">
                            <small id="contactLastNameHelp" class="form-text text-muted">Wpisz swoje nazwisko</small>
                        </div>
                        <div class="form-group">
                            <label for="#contactEmail">E-mail</label>
                            <input type="email" class="form-control" LastName="#contactEmail" id="#contactEmail"
                                aria-describedby="contactEmailHelp" placeholder="np. jan@kowalski.pl" value="">
                            <small id="contactEmailHelp" class="form-text text-muted">Wpisz swój adres e-mail</small>
                        </div>
                        <div class="form-group">
                            <label for="#contactMsg">Wiadomość</label>
                            <textarea name="contactMsg" id="contactMsg" cols="30" rows="10" class="form-control"></textarea>
                            <small id="contactMsgHelp" class="form-text text-muted">Wpisz treść wiadomości.</small>
                        </div>
                        <p class="text-right">
                        <button type="submit" class="btn btn-success btn-lg" onclick="alert('Dziękujemy za wysłanie wiadomości, skontaktujemy się z Tobą najszybciej jak to będzie możliwe.');">Wyślij</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require_once 'partials/_footer.php'; ?>