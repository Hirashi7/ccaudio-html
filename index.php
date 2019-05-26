<?php require_once 'partials/_header.php'; ?>
<?php require_once 'partials/_home-slider.php'; ?>
<section class="page-section home-categories">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Jakość, jakiej potrzebuje Twoja firma</h2>
                <p class="text-uppercase">WYBIERZ KATEGORIĘ PRODUKTÓW</p>
            </div>
        </div>
        <div class="row home-categories__wrapper">
            <a class="col-xs-12 col-4 text-center cat-item" href="/category.php">
            <picture>
                <source type="image/webp" srcset="img/category1-xs.webp">
                <source type="image/jpeg" srcset="img/category1-xs.jpg">
                <img srcset="img/category1.jpg" alt="Słuchawki" class="img-fluid">
            </picture>
                <p class="text-uppercase cat-item__title">Słuchawki</p>
                <p class="cat-item__desc">Urzadzenia wielofunkcyjne do szerokiego zastosowania</p>
            </a>
            <a class="col-xs-12 col-4 text-center cat-item" href="/category.php">
            <picture>
                <source type="image/webp" srcset="img/category2-xs.webp">
                <source type="image/jpeg" srcset="img/category2-xs.jpg">
                <img srcset="img/category2.jpg" alt="Mikrofony" class="img-fluid">
            </picture>
                <p class="text-uppercase cat-item__title">Mikrofony</p>
                <p class="cat-item__desc">Pojemnościowe oraz kierunkowe mikrofony w szerokiej gamie konfiguracji</p>
            </a>
            <a class="col-xs-12 col-4 text-center cat-item" href="/category.php">
            <picture>
                <source type="image/webp" srcset="img/category3-xs.webp">
                <source type="image/jpeg" srcset="img/category3-xs.jpg">
                <img srcset="img/category3.jpg" alt="Rozwiązania sieciowe" class="img-fluid">
            </picture>
                <p class="text-uppercase cat-item__title">Rozwiązania sieciowe</p>
                <p class="cat-item__desc">Konfiguracja oraz sprzet do serwerowni telefonicznych</p>
            </a>
        </div>
    </div>
</section>

<section class="page-section home-headsets">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Słuchawki i zestawy słuchawkowe</h2>
                <p class="text-muted"><strong>Najwyższej jakości urządzenia z przeznaczeniem komercyjnym i prywatnym</strong></p>
            </div>
        </div>
        <div class="row home-headsets__wrapper">
            <?php require 'partials/_products-line.php'?>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="/category.php" class="btn btn-primary btn-lg text-uppercase">Więcej produktów z tej kategorii</a>
            </div>
        </div>
    </div>
</section>
<section class="page-section newsletter">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 text-center newsletter__text">
            <h4>Dołącz do nas!</h4>
            <p class="text-muted">
            Zapisz się do naszego newslettera i zdobądź <strong>10% rabatu</strong> na następne zamówienie
            </p>
          </div>
          <div class="col-6">
            <form action="/cms.php" method="get" class="form form-inline">
              <div class="form-group">
                  <input type="email" name="newsletter-email" id="newsletter-email" placeholder="Wpisz adres e-mail" class="form-control-lg">
                  <button type="submit" class="btn btn-primary btn-lg text-uppercase">Zapisz się</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<?php require_once 'partials/_footer.php'; ?>
