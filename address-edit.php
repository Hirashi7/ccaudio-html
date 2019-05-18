<?php require_once 'partials/_header.php'; ?>
<main class="address-edit">
    <div class="container">
        <div class="row">
            <?php require 'partials/_sidebar-account.php'; ?>
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 page-content">
                <h1 class="page-heading">Edytuj adres</h1>
                    <a href="#" class="btn btn-default" onclick="alert('Ekran niedostępny')"><i
                            class="fa fa-chevron-left"></i> Wróć</a>
                </p>
                <form action="" method="GET" class="form">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                            <label for="#addressName">Twoja nazwa adresu</label>
                            <input type="email" class="form-control" Email="#addressName" id="#addressName"
                                aria-describedby="addressNameHelp" placeholder="jan@kowalski.pl" value="Praca">
                            <small id="addressNameHelp" class="form-text text-muted">Przypisz nazwę do swojego adresy, np. Praca, Dom</small>
                        </div>
                        <div class="form-group">
                            <label for="#addressUserName">Imię</label>
                            <input type="text" class="form-control" name="#addressUserName" id="#addressUserName"
                                aria-describedby="addressUserNameHelp" placeholder="Jan" value="Jan">
                            <small id="addressUserNameHelp" class="form-text text-muted">Wpisz swoje imie</small>
                        </div>
                        <div class="form-group">
                            <label for="#addressUserLastName">Nazwisko</label>
                            <input type="text" class="form-control" LastName="#addressUserLastName" id="#addressUserLastName"
                                aria-describedby="addressUserLastNameHelp" placeholder="Kowalski" value="Kowalski">
                            <small id="addressUserLastNameHelp" class="form-text text-muted">Wpisz swoje nazwisko</small>
                        </div>
                        <div class="form-group">
                            <label for="#addressFirstLine">Adres</label>
                            <input type="email" class="form-control" Email="#addressFirstLine" id="#addressFirstLine"
                                aria-describedby="addressFirstLineHelp" placeholder="jan@kowalski.pl" value="jan@kowalski.pl">
                            <small id="addressFirstLineHelp" class="form-text text-muted">Podaj swój e-mail</small>
                        </div>
                        <div class="form-group">
                            <label for="#addressSecondLine">Adres c.d.</label>
                            <input type="email" class="form-control" Email="#addressSecondLine" id="#addressSecondLine"
                                aria-describedby="addressSecondLineHelp" placeholder="jan@kowalski.pl" value="jan@kowalski.pl">
                            <small id="addressSecondLineHelp" class="form-text text-muted">Podaj swój e-mail</small>
                        </div>

                        <div class="form-group">
                            <label for="#addressCity">Miasto</label>
                            <input type="email" class="form-control" Email="#addressCity" id="#addressCity"
                                aria-describedby="addressCityHelp" placeholder="jan@kowalski.pl" value="jan@kowalski.pl">
                            <small id="addressCityHelp" class="form-text text-muted">Podaj swój e-mail</small>
                        </div>

                        <div class="form-group">
                            <label for="#addressPostalCode">Kod pocztowy</label>
                            <input type="email" class="form-control" Email="#addressPostalCode" id="#addressPostalCode"
                                aria-describedby="addressPostalCodeHelp" placeholder="jan@kowalski.pl" value="jan@kowalski.pl">
                            <small id="addressPostalCodeHelp" class="form-text text-muted">Podaj swój e-mail</small>
                        </div>

                        <div class="form-group">
                            
                            <div class="form-group">
                            <label for="#addressCountry">Kraj</label>
                              <select class="form-control" name="addressCountry" id="addressCountry">
                                <option selected>Polska</option>
                                <option>England</option>
                                <option>Deutschland</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="#addressPhone">Telefon</label>
                            <input type="email" class="form-control" Email="#addressPhone" id="#addressPhone"
                                aria-describedby="addressPhoneHelp" placeholder="jan@kowalski.pl" value="jan@kowalski.pl">
                            <small id="addressPhoneHelp" class="form-text text-muted">Podaj swój e-mail</small>
                        </div>
                        <div class="form-group">
                            <label for="#addressAdditionalInfo">Informacje dodatkowe</label>
                            <input type="email" class="form-control" Email="#addressAdditionalInfo" id="#addressAdditionalInfo"
                                aria-describedby="addressAdditionalInfoHelp" placeholder="jan@kowalski.pl" value="jan@kowalski.pl">
                            <small id="addressAdditionalInfoHelp" class="form-text text-muted">Podaj swój e-mail</small>
                        </div>
                        <a href="/addresses.php" class="btn btn-primary btn-lg">Aktualizuj</a>
                    </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php require_once 'partials/_footer.php'; ?>