<?php require_once 'partials/_header.php'; ?>
<main class="reset-password">
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-6 m-auto">
                <h1>Nie pamietasz hasła?</h1>
                <p class="text-muted">Po zresetowaniu hasła na Twoje konto pocztowe dotrze wiadomość z linkiem potwierdzającym.</p>
                <form action="/login.php" method="get" class="form d-flex align-items-center justify-content-between">
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Podaj adres e-mail" class="form-control-lg">
                    <button type="submit" class="btn btn-danger">Resetuj&nbsp;hasło</button>
                </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require_once 'partials/_footer.php'; ?>