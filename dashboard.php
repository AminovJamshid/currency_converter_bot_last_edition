<?php

declare(strict_types=1);

$dashboard = new Dashboard();

$records = $dashboard->getAllExchanges();
?>
<head>
    <title>CCD: Currency Converter Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php require 'navbar.php'; ?>
<div class="container mt-5">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Chat ID</th>
            <th scope="col">Conversion type</th>
            <th scope="col">Amount</th>
            <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($records as $record): ?>
            <tr>
                <th scope="row"><?php echo $record['id'] ?></th>
                <td><?php echo $record['chat_id'] ?></td>
                <td><?php echo $record['status'] ?></td>
                <td><?php echo $record['amount'] ?></td>
                <td><?php echo $record['created_at'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
