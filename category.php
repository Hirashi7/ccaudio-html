<?php require_once 'partials/_header.php'; ?>
<main class="category">
    <section class="page-section">
        <div class="container">
            <div class="row">
                <?php require 'partials/_sidebar-category.php'; ?>
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 page-content">
                    <h1 class="page-heading">Słuchawki</h1>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. A enim
                                officia totam sunt accusantium nisi, modi provident dolore quae dignissimos neque illo
                                perferendis, asperiores tempore maxime voluptatem animi voluptatum. Beatae.</p>
                    <div class="row">
                        <div class="col-12">
                            <form action="" class="form form-inline d-flex justify-content-between">
                                <div class="form-group">
                                <label for="order">Sortowanie:&nbsp;&nbsp;&nbsp;&nbsp;</label> 
                                  <select class="form-control" name="order" id="order">
                                    <option selected>Cena od najniższej</option>
                                    <option>Cena od najniższej</option>
                                    <option>Nazwa (A-Z)</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                <label for="count">Produktów na stronę:&nbsp;&nbsp;&nbsp;&nbsp;</label> 
                                  <select class="form-control" name="count" id="count">
                                    <option selected>20</option>
                                    <option>30</option>
                                    <option>60</option>
                                  </select>
                                </div>
                            </form>
                        </div>
                        <?php require 'partials/_products-grid.php'?>
                        <div class="col-12">
                            <nav aria-label="Page navigation">
                              <ul class="pagination d-flex justify-content-end" onclick="alert('Funkcja niedostepna');">
                                <li class="page-item disabled">
                                  <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require_once 'partials/_footer.php'; ?>