<?php
include ("/phonestore/src/database/connection.php");
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start();


if (isset($_GET["action"]) && $_GET["action"] == "increases" && isset($_GET["id"])) {
    $id = $_GET["id"];
    if (isset($_SESSION["cart"])) {
        $cart_items = $_SESSION["cart"];
        if (array_key_exists($id, $cart_items)) {
            $cart_items[$id]["item_quantity"] += 1;
            $_SESSION["cart"] = $cart_items;
        }
    }
    header("Location: Cart.php");
    exit;
}



?>