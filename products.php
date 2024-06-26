<?php

function getProductPrice($productName) {
    $productPrices = array(
        'AMERICANO' => 85,
        'AFFOGATO' => 85,
        'LATTE' => 70,
        'CAPPUCCINO' => 70,
        'DOPIO' => 95,
        'LONG_BLACK' => 80,
        'IRISH_COFFEE' => 95,
        'MOCHA' => 85,
        'BAGEL' => 65,
        'BANANA_NUT_BREAD' => 65,
        'BLUEBERRY_MUFFIN' => 75,
        'BLUEBERRY_SCONE' => 75,
        'BUTTER_CROISSANT' => 95,
        'OATMEAL_COOKIE' => 85,
        'ENSAYMADA' => 65,
        'DONUT' => 85
    );

    $productName = strtoupper($productName);

    return isset($productPrices[$productName]) ? $productPrices[$productName] : 0;
}

?>