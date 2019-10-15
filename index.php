<?php
/**
 * Created by PhpStorm.
 * User: David Tovilovic
 * Date: 17.09.2019
 * Time: 12:13
 */
include_once 'Classes/octagon.php';
include_once 'Classes/rectangle.php';
use David\Megahamster as AbstractClasses;
?>
<head>
    <title>Megahamster | Ihr Hamsterversorger</title>
    <script type="text/css"></script>
    <link rel="stylesheet" type="text/css" href="hamsterstyle.css">
</head>
<body>
    <header id="welcome">

    </header>
    <?php
    include_once('Classes/room.php');
    $array_products = [new AbstractClasses\rectangle('The room', 49.0,50.0,80.0,'none'), new AbstractClasses\rectangle('The flat', 149.0,80,120,'food jars'), new AbstractClasses\octagon('The pit', 69.0,20,'Hamster training gloves, Hamster punching sack')];
    $array_products[0]->toHTML();
    foreach ($array_products as $product) {
        echo $product->toHTML();
    }
    ?>
    <footer>
        <hr>
        <p><small>Tel. +43 660 1234567</small></p>
    </footer>
</body>
