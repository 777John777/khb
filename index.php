<?php
require_once 'db.php';
$name = $_POST['name'];
$fam = $_POST['fam'];
$email = $_POST['email'];
$num = $_POST['num'];
$pass = md5($_POST['pass']."rse43" );

$stmt = $pdo->query('INSERT INTO `users`(`name`,`fam`,`email`,`num`,`pass`)VALUES(
                                                                                                "'.$name.'",
                                                                                                "'.$fam.'", 
                                                                                                "'.$email.'", 
                                                                                                "'.$num.'", 
                                                                                                "'.$pass.'"
                                                                                                )');

var_dump($pdo->errorInfo());

