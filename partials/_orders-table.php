<?php $orders = [
    [
        'id' => 1346,
        'date' => '2019-06-23',
        'price' => '388,99 PLN',
        'payment' => 'Zwykły przelew',
        'status' => [
            'name' => 'W oczekiwaniu na płatność',
            'type' => 'warning'
        ]
    ],
    [
        'id' => 1294,
        'date' => '2019-06-05',
        'price' => '1043,87 PLN',
        'payment' => 'DotPay',
        'status' => [
            'name' => 'Zrealizowane',
            'type' => 'success'
        ]
    ],
];
?>
<table class="table table-hover table-responsive">
    <thead class="thead-inverse text-muted">
        <tr>
            <th>Nr Zamowienia</th>
            <th>Data</th>
            <th>Cena końcowa</th>
            <th>Płatność</th>
            <th>Status</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
                <tr>
                    <td scope="row"><?= $order['id']; ?></td>
                    <td><?= $order['date']; ?></td>
                    <td><?= $order['price']; ?></td>
                    <td><?= $order['payment']; ?></td>
                    <td><span class="badge badge-<?= $order['status']['type']; ?>"><?= $order['status']['name']; ?></span></td>
                    <td>
                    <a href="/order-details.php" class="btn btn-info btn-sm">
                        Szczegóły
                    </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</table>