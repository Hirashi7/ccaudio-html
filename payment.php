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
<main class="payments cart">
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="page-heading">Podsumowanie - Płatność</h1>
                </div>
                <div class="col-8 col-xs-12">
                    <div class="form-check">
                        <label class="form-check-label payment-method d-flex align-items-center">
                            <img src="/img/payu.jpg" alt="PayU" width="100">
                            <input class="form-check-input" type="radio" name="payment-method"
                                id="payment-method_1" value="checkedValue" checked> Płatność PayU
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label payment-method d-flex align-items-center">
                            <img src="/img/PayPal.jpg" alt="PayPal" width="100">
                            <input class="form-check-input" type="radio" name="payment-method"
                                id="payment-method_2" value="checkedValue"> Płatność PayPal
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label payment-method d-flex align-items-center">
                            <img src="/img/self-pickup.png" alt="Odbiór osobisty" width="70">
                            <input class="form-check-input" type="radio" name="payment-method"
                                id="payment-method_3" value="checkedValue">Przelew tradycyjny
                        </label>
                    </div>
                    <hr>
                    <table class="table cart-table">
                        <thead class="thead-inverse text-muted">
                            <tr>
                                <th></th>
                                <th>Nazwa</th>
                                <th>Cena jednostkowa</th>
                                <th>Ilość</th>
                                <th>W sumie</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product): ?>
                            <tr>
                                <td scope="row">
                                    <a href="/product.php?product_id=<?= $product['id']; ?>">
                                        <picture>
                                            <source type="image/webp" srcset="img/<?= $product['image']; ?>-xs.webp">
                                            <source type="image/jpeg" srcset="img/<?= $product['image']; ?>-xs.jpg">
                                            <img srcset="img/<?= $product['image']; ?>.jpg"
                                                alt="<?= $product['name']; ?>" class="img-fluid" width="200">
                                        </picture>
                                    </a>
                                </td>
                                <td><a
                                        href="/product.php?product_id=<?= $product['id']; ?>"><strong><?= $product['name']; ?></strong></a>
                                </td>
                                <td><span class="unit_price"><?= $product['unit_price']; ?></span> <span class="currency">PLN</span></td>
                                <td>
                                    <input min="1" type="number" max="<?= $product['stock']; ?>"
                                        class="cart_quantity cart-table__quantity" name="quantity"
                                        id="cart_quantity_<?= $product['id']; ?>"
                                        data-price="<?= $product['unit_price']; ?>"
                                        data-product="<?= $product['id']; ?>" value="<?= $product['quantity']; ?>">
                                </td>
                                <td>
                                    <span class="cart_total"
                                        data-product="<?= $product['id']; ?>"><?= $product['unit_price'] * $product['quantity']; ?>
                                        </span> <span class="currency">PLN</span>
                                </td>
                                <td>
                                    <button class="close cart-remove-product">&times;</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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
                                            <a href="/thankyou.php"
                                                class="button-summary btn btn-success btn-lg btn-block">Kupuję i płacę <i
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