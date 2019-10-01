<?php
/**
 * Created by PhpStorm.
 * User: David Tovilovic
 * Date: 17.09.2019
 * Time: 12:13
 */
include_once 'classes/octagon.php';
include_once 'classes/rectangle.php';
?>
<head>
    <title>Megahamster | Ihr Hamsterversorger</title>
    <script type="text/css"></script>
</head>
<body>
    <header id="welcome">

    </header>
    <?php
    include_once('classes/room.php');
    $array_products = [new rectangle('The room', 49.5,45.5,50.5), new rectangle('The flat', 49.5,65,70), new octagon('The pit', 49.0,30)];
    $array_products[0]->toHTML();
    foreach ($array_products as $product) {
        echo $product->toHTML();
    }
    ?>
    <footer>
        <p><small>Tel. +43 660 1234567</small></p>
    </footer>
</body>
