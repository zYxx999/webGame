<?php

$image = $_POST['image'];
$followers= $_POST['followers'];

require __DIR__ . '/actions/config.php';

$query = "INSERT INTO trending (image, followers) VALUES ('$image', '$followers')";
$stmt = $pdo->prepare($query);
$stmt->execute();

header('Location: /trending.php');