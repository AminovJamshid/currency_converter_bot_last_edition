<?php

declare(strict_types=1);

$currency = new Currency();
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">Currency Converter</a>
        <div class="d-flex">
            <em>1 UZS = <?php echo $currency->getUsd()->Rate ?> USD</em>
        </div>
    </div>
</nav>
