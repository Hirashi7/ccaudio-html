<?php require_once 'partials/_header.php'; ?>
<main class="register">
    <div class="container">
        <div class="row">
            <?php require 'partials/_sidebar-identity.php'; ?>
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 page-content">
                <h1 class="page-heading">Utwórz konto</h1>
                <div class="row">
                        <form action="" method="GET" class="form">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                              <label for="#registerName">Imię</label>
                              <input type="text" class="form-control" name="#registerName" id="#registerName" aria-describedby="registerNameHelp" placeholder="Jan">
                              <small id="registerNameHelp" class="form-text text-muted">Wpisz swoje imie</small>
                            </div>
                            <div class="form-group">
                              <label for="#registerLastName">Nazwisko</label>
                              <input type="text" class="form-control" LastName="#registerLastName" id="#registerLastName" aria-describedby="registerLastNameHelp" placeholder="Kowalski">
                              <small id="registerLastNameHelp" class="form-text text-muted">Wpisz swoje nazwisko</small>
                            </div>
                            <div class="form-group">
                              <label for="#registerEmail">E-mail</label>
                              <input type="email" class="form-control" Email="#registerEmail" id="#registerEmail" aria-describedby="registerEmailHelp" placeholder="jan@kowalski.pl">
                              <small id="registerEmailHelp" class="form-text text-muted">Podaj swój e-mail</small>
                            </div>
                            <div class="form-group">
                              <label for="#registerEmailConfirm">Potwierdź e-mail</label>
                              <input type="email" class="form-control" EmailConfirm="#registerEmailConfirm" id="#registerEmailConfirm" aria-describedby="registerEmailConfirmHelp" placeholder="">
                              <small id="registerEmailConfirmHelp" class="form-text text-muted">Podaj swój e-mail</small>
                            </div>
                            <div class="form-group">
                              <label for="#registerPassword">Hasło</label>
                              <input type="password" class="form-control" Password="#registerPassword" id="#registerPassword" aria-describedby="registerPasswordHelp">
                              <small id="registerPasswordHelp" class="form-text text-muted">Wpisz nowe hasło</small>
                            </div>
                            <div class="form-group">
                              <label for="#registerPasswordConfirm">Potwierdź hasło</label>
                              <input type="password" class="form-control" PasswordConfirm="#registerPasswordConfirm" id="#registerPasswordConfirm" aria-describedby="registerPasswordConfirmHelp">
                              <small id="registerPasswordConfirmHelp" class="form-text text-muted">Wpisz nowe hasło ponownie</small>
                            </div>
                            </div>
                            <div class="col-12">

                            
                            <div class="form-check form-group text-muted">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="" id="" value="true">
                                Oświadczam, że zapoznałem się z <a href="/cms.php">regulaminem</a> i akceptuję jego postanowienia.
                              </label>
                            </div>
                            <div class="form-check form-group">
                              <label class="form-check-label text-muted">
                                <input type="checkbox" class="form-check-input" name="" id="" value="true">
                                Wyrażam zgodę na przetwarzanie moich danych osobowych przez CC Audio Sp. J. w celach marketingowych.
                              </label>
                            </div>
                            <p class="small text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, illo nostrum ut nisi mollitia fugit voluptatem at, voluptatibus tempora neque dolorem consequatur doloribus obcaecati beatae facilis praesentium quas omnis aliquam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem est doloremque ullam tempore expedita. Harum quasi sunt, doloribus similique ullam quos molestias quisquam, laudantium recusandae corrupti sit corporis nulla assumenda?Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, illo nostrum ut nisi mollitia fugit voluptatem at, voluptatibus tempora neque dolorem consequatur doloribus obcaecati beatae facilis praesentium quas omnis aliquam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem est doloremque ullam tempore expedita.</p>
                            <a href="/login.php" class="btn btn-primary btn-lg">Załóż konto</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once 'partials/_footer.php'; ?>