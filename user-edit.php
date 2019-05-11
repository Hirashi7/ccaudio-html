<?php require_once 'partials/_header.php'; ?>
<main class="user-edit">
    <div class="container">
        <div class="row">
            <?php require 'partials/_sidebar-account.php'; ?>
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 page-content">
                <h1 class="page-heading">Edycja danych</h1>
                <p class="text-muted">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum velit architecto quas illo officia, praesentium optio fugiat aperiam repellendus quidem magni quaerat at deleniti blanditiis, impedit ab repudiandae accusantium sit.</p>
                <form action="" method="GET" class="form">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="#userName">Imię</label>
                            <input type="text" class="form-control" name="#userName" id="#userName"
                                aria-describedby="userNameHelp" placeholder="Jan" value="Jan">
                            <small id="userNameHelp" class="form-text text-muted">Wpisz swoje imie</small>
                        </div>
                        <div class="form-group">
                            <label for="#userLastName">Nazwisko</label>
                            <input type="text" class="form-control" LastName="#userLastName" id="#userLastName"
                                aria-describedby="userLastNameHelp" placeholder="Kowalski" value="Kowalski">
                            <small id="userLastNameHelp" class="form-text text-muted">Wpisz swoje nazwisko</small>
                        </div>
                        <div class="form-group">
                            <label for="#userEmail">E-mail</label>
                            <input type="email" class="form-control" Email="#userEmail" id="#userEmail"
                                aria-describedby="userEmailHelp" placeholder="jan@kowalski.pl" value="jan@kowalski.pl">
                            <small id="userEmailHelp" class="form-text text-muted">Podaj swój e-mail</small>
                        </div>
                        <div class="form-group">
                            <label for="#userOldPassword">Stare hasło</label>
                            <input type="password" class="form-control" Password="#userOldPassword"
                                id="#userOldPassword" aria-describedby="userOldPasswordHelp">
                            <small id="userOldPasswordHelp" class="form-text text-muted">Uzupełnij tylko jeżeli chcesz zmienić hasło</small>
                        </div>
                        <div class="form-group">
                            <label for="#user">Nowe hasło</label>
                            <input type="password" class="form-control" Password="#userPassword"
                                id="#userPassword" aria-describedby="userPasswordHelp">
                            <small id="userPasswordHelp" class="form-text text-muted">Uzupełnij tylko jeżeli chcesz zmienić hasło</small>
                        </div>
                        <div class="form-group">
                            <label for="#userPasswordConfirm">Powtórz hasło</label>
                            <input type="password" class="form-control" PasswordConfirm="#userPasswordConfirm"
                                id="#userPasswordConfirm" aria-describedby="userPasswordConfirmHelp">
                            <small id="userPasswordConfirmHelp" class="form-text text-muted">Wpisz nowe hasło
                                ponownie</small>
                        </div>
                        <a href="/my-account.php" class="btn btn-primary btn-lg">Aktualizuj</a>
                    </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php require_once 'partials/_footer.php'; ?>