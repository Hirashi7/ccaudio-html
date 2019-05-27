<?php session_start();
  if(isset($_GET['loginEmail'])
    && isset($_GET['loginPassword'])
    && !empty($_GET['loginEmail'])
    && !empty($_GET['loginPassword'])) {
      $_SESSION['login'] = true;
    }
    if(isset($_GET['logout']) && !empty($_GET['logout'])){
      $_SESSION['login'] = false;
    }
?>

<!doctype html>
<html lang="pl">

<head>
  <title>Sklep ze sprzętem dla Call Center | CC Audio</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<span class="loading"></span>
  <!-- TOP INFO -->
  <aside class="top-info">
    <div class="container">
      <div class="row">
        <div class="col-12 top-info__content">
          <a href="/cms.php">Darmowa wysyłka i&nbsp;zwroty od&nbsp;zamówienia na&nbsp;min. 500&nbsp;zł - <strong>Sprawdź
              szczegóły</strong></a>
          <a class="top-info__close" href="#">&times;</a>
        </div>
      </div>
    </div>
  </aside>
  <!-- /TOP-INFO -->

  <!-- MAIN MENU -->
  <nav class="container main-header">
    <!-- TOP BAR -->
    <div class="row align-items-center top-bar">
      <div class="col-xs-12 col-sm-4 top-bar__search">
        <form action="/category.php" method="GET">
          <label for="#top-bar-search" class="input-search">
            <input type="search" placeholder="Wyszukaj" id="top-bar-search">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </label>
        </form>
      </div>
      <div class="col-sm-4 col-xs-12 top-bar__brand">
        <a href="/"><img src="img/logo.png" alt="CC Audio"></a>
      </div>
      <div class="col-xs-12 col-sm-4 top-bar__controls">
        <ul class="list-inline">
          <li class="list-inline-item">
            <select name="lang" id="shop-lang" class="top-bar__link">
              <option value="PL">PL</option>
              <option value="EN">EN</option>
              <option value="DE">DE</option>
            </select>
          </li>
          <li class="list-inline-item">
            <select name="currency" id="shop-currency" class="top-bar__link">
              <option value="PLN">PLN</option>
              <option value="EUR">EUR</option>
              <option value="GBP">GBP</option>
            </select>
          </li class="list-inline-item">
          <?php if(isset($_SESSION['login']) && $_SESSION['login']): ?>
          <li class="list-inline-item"><a href="/my-account.php" class="top-bar__link">Moje konto</a></li>
          <li class="list-inline-item"><a href="/?logout=true" class="top-bar__link">Wyloguj sie</a></li>
          <?php else:?>
          <li class="list-inline-item"><a href="/login.php" class="top-bar__link">Logowanie</a></li>
          <?php endif;?>
          
          <li class="list-inline-item"><a href="/cart.php" class="top-bar__cart top-bar__link"><i
                class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge">2</span></a></li>
        </ul>
      </div>
    </div>
    <!-- /TOP-BAR -->
    <!-- NAVIGATION -->
    <div class="row justify-content-center menu-bar">
      <div class="col-12 d-none d-sm-block">
        <ul class="list-inline">
          <li class="list-inline-item menu-bar__item">
            <a href="#">Słuchawki</a>
            <?php require 'partials/_menu-dropdown.php'; ?>
          </li>
          <li class="list-inline-item menu-bar__item">
            <a href="#">Mikrofony</a>
            <?php require 'partials/_menu-dropdown.php'; ?>
          </li>
          <li class="list-inline-item menu-bar__item">
            <a href="#">Telefony</a>
            <?php require 'partials/_menu-dropdown.php'; ?>
          </li>
          <li class="list-inline-item menu-bar__item">
            <a href="#">Marki</a>
            <?php require 'partials/_menu-dropdown.php'; ?>
          </li>
        </ul>
      </div>
      <nav class="navbar navbar-expand-sm navbar-light bg-light col-12 nav-mobile">
        <a class="navbar-brand" href="#"><strong>MENU</strong></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Słuchawki</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
              <a class="dropdown-item" href="/category.php">Biznes</a>
                <a class="dropdown-item" href="/category.php">Dla Ciebie</a>
                <a class="dropdown-item" href="/category.php">Konferencje</a>
                <a class="dropdown-item" href="/category.php">Sieciowe</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mikrofony</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="/category.php">Biznes</a>
                <a class="dropdown-item" href="/category.php">Dla Ciebie</a>
                <a class="dropdown-item" href="/category.php">Konferencje</a>
                <a class="dropdown-item" href="/category.php">Sieciowe</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Telefony</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
              <a class="dropdown-item" href="/category.php">Biznes</a>
                <a class="dropdown-item" href="/category.php">Dla Ciebie</a>
                <a class="dropdown-item" href="/category.php">Konferencje</a>
                <a class="dropdown-item" href="/category.php">Sieciowe</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Marki</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
              <a class="dropdown-item" href="/category.php">Biznes</a>
                <a class="dropdown-item" href="/category.php">Dla Ciebie</a>
                <a class="dropdown-item" href="/category.php">Konferencje</a>
                <a class="dropdown-item" href="/category.php">Sieciowe</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- /NAVIGATION -->
  </nav>
  <!-- /top-bar -->