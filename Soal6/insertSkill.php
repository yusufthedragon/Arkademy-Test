<?php

include 'Koneksi.php';

$name = htmlspecialchars($_POST['name']);
$user_id = htmlspecialchars($_POST['user_id']);

$db = new Koneksi();
$db->insertSkill($name, $user_id);

header("Location: index.php");
exit();