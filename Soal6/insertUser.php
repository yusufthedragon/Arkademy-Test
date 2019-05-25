<?php

include 'Koneksi.php';

$name = htmlspecialchars($_POST['name']);

$db = new Koneksi();
$db->insertUser($name);

header("Location: index.php");
exit();