<?php
$pdo = new PDO(
    'mysql: host=localhost; dbname=registr; charsset=utf8',
    'root',
    ''
);

header("Location: index.html");