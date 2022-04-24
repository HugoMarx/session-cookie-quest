<?php
require 'inc/data/products.php';

session_start();

if (isset($_SESSION)) {
    if ($_GET['edit_qte'] === 'add') {
        $_SESSION['cart-item'][$_GET['item_index']]['qte'] += 1;
        header('Location: /cart.php');
    } else {
        $_SESSION['cart-item'][$_GET['item_index']]['qte'] -= 1;
        var_dump($_SESSION);
        header('Location: /cart.php');
        if ($_SESSION['cart-item'][$_GET['item_index']]['qte'] < 1) {
            unset($_SESSION['cart-item'][$_GET['item_index']]);
        }
    }
}
