<aside class="col-xs-12 col-sm-4 col-md-3 col-lg-3 sidebar">
        <div class="sidebar__block">
            <p class="sidebar__block-title text-uppercase">Moje konto</p>
            <ul class="sidebar__block-list list-unstyled">
                <li><a href="/my-account.php">
                Konto</a></li>
                <li><a href="/user-edit.php">
                Moje dane</a></li>
                <li><a href="/addresses.php">
                Moje adresy</a></li>
            </ul>
        </div>
        <div class="sidebar__block">
            <p class="sidebar__block-title text-uppercase">Zamówienia</p>
            <ul class="sidebar__block-list list-unstyled">
                <li><a href="/orders.php">Moje zamówienia</a></li>
                <li><a href="/order-follow.php">Śledzenie przesyłki</a></li>
            </ul>
        </div>
        <div class="sidebar__block">
            <p class="sidebar__block-title text-uppercase">Pozostałe</p>
            <ul class="sidebar__block-list list-unstyled">
                <li><a href="/favorites.php">Ulubione</a></li>
            </ul>
        </div>
        <?php require '_block-sidebar-contact.php'; ?>
</aside>