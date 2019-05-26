<?php require_once 'partials/_header.php';
$products = [
                    [
                        'id' => 1,
                        'name' => 'SONY MDR-ZX 110B',
                        'image' => 'sluchawki1',
                        'unit_price' => 459.99,
                        'stock' => 12,
                        'quantity' => 2
                    ],
                    [
                        'id' => 2,
                        'name' => 'POLYCOM Y777',
                        'image' => 'sluchawki2',
                        'unit_price' => 512.87,
                        'stock' => 5,
                        'quantity' => 2
                    ]
                ];
?>
<main class="cart">
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="page-heading">Podsumowanie - Wysyłka</h1>
                </div>
                <div class="col-8 col-xs-12">
                    <div class="row">
                        <div class="col-12">
                            <h3>Wybierz adres</h3>
                        </div>
                        <div class="col-xs-12 col-6 shipping-address">
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
                                        <a href="/address-edit.php" class="btn btn-warning"><i
                                                class="fa fa-pencil-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-6 shipping-address">
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
                                        <a href="/address-edit.php" class="btn btn-warning"><i
                                                class="fa fa-pencil-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <hr>
                        <button class="btn btn-secondary shipping-another-address">Wpisz inny adres</button>
                        <hr>

                        <form action="" method="GET" class="form shipping-additional-address">
                            <div class="form-group">
                                <label for="#addressUserName">Imię</label>
                                <input type="text" class="form-control" name="#addressUserName" id="#addressUserName"
                                    aria-describedby="addressUserNameHelp" placeholder="Jan" value="">
                                <small id="addressUserNameHelp" class="form-text text-muted">Wpisz swoje
                                    imie</small>
                            </div>
                            <div class="form-group">
                                <label for="#addressUserLastName">Nazwisko</label>
                                <input type="text" class="form-control" LastName="#addressUserLastName"
                                    id="#addressUserLastName" aria-describedby="addressUserLastNameHelp"
                                    placeholder="Kowalski" value="">
                                <small id="addressUserLastNameHelp" class="form-text text-muted">Wpisz swoje
                                    nazwisko</small>
                            </div>
                            <div class="form-group">
                                <label for="#addressFirstLine">Adres</label>
                                <input type="text" class="form-control" Email="#addressFirstLine" id="#addressFirstLine"
                                    aria-describedby="addressFirstLineHelp" placeholder="ul. Przykładowa 34" value="">
                                <small id="addressFirstLineHelp" class="form-text text-muted">Podaj swój
                                    adres</small>
                            </div>
                            <div class="form-group">
                                <label for="#addressSecondLine">Adres c.d.</label>
                                <input type="text" class="form-control" Email="#addressSecondLine"
                                    id="#addressSecondLine" aria-describedby="addressSecondLineHelp"
                                    placeholder="np. Aleja Powstańców" value="">
                                <small id="addressSecondLineHelp" class="form-text text-muted">Podaj swój
                                    adres</small>
                            </div>

                            <div class="form-group">
                                <label for="#addressCity">Miasto</label>
                                <input type="text" class="form-control" Email="#addressCity" id="#addressCity"
                                    aria-describedby="addressCityHelp" placeholder="np. Warszawa" value="">
                                <small id="addressCityHelp" class="form-text text-muted">Podaj swoje
                                    miasto</small>
                            </div>

                            <div class="form-group">
                                <label for="#addressPostalCode">Kod pocztowy</label>
                                <input type="text" class="form-control" Email="#addressPostalCode"
                                    id="#addressPostalCode" aria-describedby="addressPostalCodeHelp"
                                    placeholder="np. 00-000" value="">
                                <small id="addressPostalCodeHelp" class="form-text text-muted">Podaj swój
                                    kod pocztowy w formacie 00-000</small>
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
                                <input type="text" class="form-control" Email="#addressPhone" id="#addressPhone"
                                    aria-describedby="addressPhoneHelp" placeholder="np. 987-654-321" value="">
                                <small id="addressPhoneHelp" class="form-text text-muted">Podaj swój
                                    telefon</small>
                            </div>
                            <div class="form-group">
                                <label for="#addressAdditionalInfo">Informacje dodatkowe</label>
                                <input type="text" class="form-control" Email="#addressAdditionalInfo"
                                    id="#addressAdditionalInfo" aria-describedby="addressAdditionalInfoHelp"
                                    placeholder="" value="">
                                <small id="addressAdditionalInfoHelp" class="form-text text-muted">Podaj dodatkowe
                                    informacje</small>
                            </div>
                        </form>
                    </div>
                    <div class="col-12">
                        <hr>
                        <h3>Wybierz formę dostawy</h3>
                        <div class="form-check">
                            <label class="form-check-label shipping-method">
                                <input class="form-check-input" type="radio" name="shipping-method"
                                    id="shipping-method_1" value="checkedValue" checked> Kurier DHL
                                <strong>20.00zł</strong>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label shipping-method">
                                <input class="form-check-input" type="radio" name="shipping-method"
                                    id="shipping-method_2" value="checkedValue"> Kurier DHL (za pobraniem)
                                <strong>25.00zł</strong>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label shipping-method">
                                <input class="form-check-input" type="radio" name="shipping-method"
                                    id="shipping-method_3" value="checkedValue">Odbiór osobisty <strong>Za
                                    darmo</strong>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-xs-12">
                    <div class="shipping-summary">
                        <h6 class="text-muted">Podsumowanie zamówienia</h6>
                        <div class="cart__summary" style="height: 100%;">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Produkty w sumie (brutto)</td>
                                        <td>
                                            <?php
                            $total = 0; 
                            foreach ($products as $product) {
                                $total += $product['unit_price'] * $product['quantity'];
                            }
                            $delivery = 20.22;
                            $tax = $total * 0.23;
                            $summary = $total + $delivery;
                        ?>
                                            <span class="products_summary" data-value="<?= $total; ?>">
                                                <?= $total; ?>
                                            </span> <span class="currency">PLN</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Wysyłka (brutto)</td>
                                        <td><span class="delivery_summary"
                                                data-value="<?= $delivery; ?>"><?= $delivery; ?></span> <span
                                                class="currency">PLN</span></td>
                                    </tr>
                                    <tr>
                                        <td>Podatek (brutto)</td>
                                        <td><span class="tax_summary" data-value="<?= $tax; ?>"><?= $tax; ?></span>
                                            <span class="currency">PLN</span></td>
                                    </tr>
                                    <tr>
                                        <td>Razem (brutto)</td>
                                        <td><span class="total" data-value="<?= $summary; ?>"><?= $summary; ?></span>
                                            <span class="currency">PLN</span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <a href="/payment.php"
                                                class="button-summary btn btn-success btn-lg btn-block">Nastepny krok <i
                                                    class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require_once 'partials/_footer.php'; ?>