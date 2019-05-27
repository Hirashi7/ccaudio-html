<?php require_once 'partials/_header.php'; ?>
<main class="product">
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-7 col-xs-12">
                    <div class="product-gallery">
                        <a data-fancybox="gallery" href="img/sluchawki2.jpg">
                            <picture>
                                <source type="image/webp" srcset="img/sluchawki2-xl.webp">
                                <source type="image/jpeg" srcset="img/sluchawki2-xl.jpg">
                                <img srcset="img/sluchawki2.jpg" alt="Sluchawki 3" class="img-fluid">
                            </picture>
                        </a>

                        <div class="product-gallery__thumbnails d-flex justify-content-between">
                            <a data-fancybox="gallery" href="img/sluchawki5.jpg">
                                <picture>
                                    <source type="image/webp" srcset="img/sluchawki5-xl.webp">
                                    <source type="image/jpeg" srcset="img/sluchawk5-xl.jpg">
                                    <img srcset="img/sluchawki5.jpg" alt="Sluchawki 5" class="img-fluid">
                                </picture>
                            </a>

                            <a data-fancybox="gallery" href="img/sluchawki6.jpg">
                                <picture>
                                    <source type="image/webp" srcset="img/sluchawki6-xl.webp">
                                    <source type="image/jpeg" srcset="img/sluchawki6-xl.jpg">
                                    <img srcset="img/sluchawki6.jpg" alt="Sluchawki 6" class="img-fluid">
                                </picture>
                            </a>
                            <a data-fancybox="gallery" href="img/sluchawki7.jpg">
                                <picture>
                                    <source type="image/webp" srcset="img/sluchawki7-xl.webp">
                                    <source type="image/jpeg" srcset="img/sluchawki7-xl.jpg">
                                    <img srcset="img/sluchawki7.jpg" alt="Sluchawki 7" class="img-fluid">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-5 col-xs-12">
                    <div class="alert alert-success product-added" role="alert">
                        <p class="d-flex justify-content-between align-items-center mb-0">
                            <span><strong>Polycom Y777</strong> dodany do koszyka</span>
                            <a href="/cart.php" class="btn btn-success">Zobacz w koszyku</a>
                        </p>
                    </div>
                    <h1 class="page-heading">Polycom Y777</h1>
                    <p>
                        <a href="#" class="text-primary" onclick="alert('Dodano do ulubionych');$(this).fadeOut();">Dodaj do ulubionych <i class="fa fa-heart" aria-hidden="true"></i></a>
                    </p>
                    <p class=="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate
                        doloremque laborum voluptas aspernatur consectetur, dolorum odio sed accusamus, deleniti
                        laudantium fugit, tempore sunt? Iusto neque quas pariatur doloremque maiores ipsa!</p>
                    <p class="price h3">
                        512,87 <span class="small">PLN (brutto)</span>
                    </p>
                    <p class="text-success" role="alert">
                        <strong>Produkt dostępny</strong>
                    </p>
                    <div class="add-to-cart">
                        <div class="form d-flex justify-content-between">
                            <label for="add-to-cart-input">Ilość: <br>
                                <input type="number" name="add-to-cart-input" id="add-to-cart-input" min="1" max="12"
                                    value="1">
                            </label>
                            <button class="btn btn-success btn-lg btn-block button-submit">Dodaj do koszyka <i
                                    class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <div class="product-tabs" id="tabs">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-desc-tab" data-toggle="tab"
                                        href="#nav-desc" role="tab" aria-controls="nav-desc"
                                        aria-selected="true">Opis</a>
                                    <a class="nav-item nav-link" id="nav-spec-tab" data-toggle="tab" href="#nav-spec"
                                        role="tab" aria-controls="nav-spec" aria-selected="false">Specyfikacja</a>
                                    <a class="nav-item nav-link" id="nav-payments-tab" data-toggle="tab"
                                        href="#nav-payments" role="tab" aria-controls="nav-payments"
                                        aria-selected="false">Dostawa i płatność</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-desc" role="tabpanel"
                                    aria-labelledby="nav-desc-tab">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi nesciunt dolorum
                                    quidem, magnam dolore deserunt eos, aut suscipit eaque ducimus labore iste rem omnis
                                    debitis maxime possimus asperiores. Voluptate, ipsum.
                                </div>
                                <div class="tab-pane fade" id="nav-spec" role="tabpanel" aria-labelledby="nav-spec-tab">
                                    <table class="table table-light">
                                        <tbody>
                                            <tr>
                                                <td>Atrybut</td>
                                                <td><strong>Wartość</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Atrybut</td>
                                                <td><strong>Wartość</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Atrybut</td>
                                                <td><strong>Wartość</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Atrybut</td>
                                                <td><strong>Wartość</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Atrybut</td>
                                                <td><strong>Wartość</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Atrybut</td>
                                                <td><strong>Wartość</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-payments" role="tabpanel"
                                    aria-labelledby="nav-payments-tab">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat in amet placeat,
                                    tempora consequuntur sit, aut veritatis modi odio, atque inventore itaque! Beatae
                                    repellendus eum debitis id amet atque nobis!
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium corrupti natus
                                    quos exercitationem quas non suscipit deserunt, dolorum aliquam? Temporibus nisi
                                    corrupti voluptate voluptas explicabo magni libero saepe autem tempora.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
<?php require_once 'partials/_footer.php'; ?>