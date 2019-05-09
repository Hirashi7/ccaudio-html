<?php require_once 'partials/_header.php'; ?>
<main class="login">
    <div class="container">
        <div class="row">
            <?php require 'partials/_sidebar-account.php'; ?>
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 page-content">
                <h1 class="page-heading">Zaloguj się</h1>
                <div class="row">
                    <div class="col-xs-12 col-6">
                        <h6>Masz już konto?</h6>
                        <p class="text-muted">
                            Jeżeli jesteś zarejestrowanym użytownikiem, zaloguj się za pomocą poniższego formularza.
                        </p>
                        <form action="/" method="get" class="login-form">
                            <div class="form-group">
                                <div class="form-group">
                                  <label for="#loginEmail">Email</label>
                                  <input type="email" class="form-control" name="loginEmail" id="loginEmail" aria-describedby="loginEmailHelp" placeholder="example@example.com">
                                  <small id="loginEmailHelp" class="form-text text-muted">Wpisz swój adres e-mail</small>
                                </div>
                                <div class="form-group">
                                  <label for="#loginPassword">Hasło</label>
                                  <input type="password" class="form-control" name="loginPassword" id="loginPassword" aria-describedby="loginPasswordHelp">
                                  <small id="loginPasswordHelp" class="form-text text-muted">Wpisz swoje hasło</small>
                                </div>
                                <div class="form-check form-group">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="loginRememberMe" id="loginRememberMe" value="true">
                                    Zapamiętaj mnie
                                  </label>
                                </div>
                                <p class="d-flex align-items-center justify-content-between">
                                    <a href="/reset-password.php">Nie pamiętasz hasła?</a>
                                    <button type="submit" class="btn btn-primary btn-lg">Zaloguj się</button>
                                </p>
                            </div>
                        </form>
                        <p class="text-center text-muted"><small>lub...</small></p>
                        <hr>
                        <p class="text-center">
                            <a href="/" class="btn btn-danger btn-lg">Zaloguj się z Google <i class="fab fa-google"></i></a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-6">
                        <h6>Stwórz konto</h6>
                        <p class="text-muted">Stwórz swoje konto w CC Audio! Uzyskasz możliwość zarządzania adresami, śledzenia przesyłek i wiele więcej.</p>
                        <p>
                            <a href="/register.php" class="btn btn-primary btn-lg">Utwórz konto</a>
                        </p>
                        <h6>Dlaczego warto załozyć konto?</h6>
                        <ul class="text-muted">
                            <li>Promocje dla zarejestrowanych</li>
                            <li>Historia transakcji</li>
                            <li>Wygodniejszy proces zakupowy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once 'partials/_footer.php'; ?>