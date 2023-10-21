<?php
include "./database.php";
global $conn;

$query = "CREATE TABLE IF NOT EXISTS gift_cards(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    name VARCHAR(4096),
    category VARCHAR(4096),
    image TEXT(64),
    prices VARCHAR(4096),
    description VARCHAR(150),
    created_date DATETIME
    )ENGINE myISAM";
$result = mysqli_query($conn, $query);
if ($result) {
    $ans = 'successfully created table gift_cards';
    echo "<pre>" . $ans . "</pre>";
} else {
    $ans = 'An error occurred while creating table gift_cards';
    echo "<pre>" . $ans . "</pre>";
}

$query = "CREATE TABLE IF NOT EXISTS gift_cards_categories(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    name VARCHAR(4096),
    description VARCHAR(150)
    )ENGINE myISAM";
$result = mysqli_query($conn, $query);
if ($result) {
    $ans = 'successfully created table gift_cards_categories';
    echo "<pre>" . $ans . "</pre>";
} else {
    $ans = 'An error occurred while creating table gift_cards_categories';
    echo "<pre>" . $ans . "</pre>";
}

?>