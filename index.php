<?php
    require "./utils/get_data.php";
    $products = get_data("./data/product.json");
    $menus = get_data("./data/menu.json");
?>;
<?php require "./components/header.php"; ?>
<?php require "./components/navbar.php"; ?>
<?php require "./components/hero.php"; ?>
<?php require "./components/about.php"; ?>
<?php require "./components/menus.php"; ?>
<?php require "./components/products.php"; ?>
<?php require "./components/contacts.php"; ?>
<?php require "./components/footer.php"; ?>