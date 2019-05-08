<?php require_once 'partials/_header.php'; ?>
<main class="error404">
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <h1 class="text-center">Ups! Strona nie została znaleziona</h1>
                <form action="/category.php" method="GET" class="text-center">
                    <label for="#top-bar-search" class="input-search input-search--lg">
                        <input type="search" placeholder="Wpisz czego szukasz" id="top-bar-search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </label>
                </form>
                <p class="text-center">
                    <a href="/" class="btn btn-primary btn-lg">Wróć do sklepu</a>
                </p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require_once 'partials/_footer.php'; ?>