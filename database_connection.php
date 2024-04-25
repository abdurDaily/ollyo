<?php
// $connect = mysql_connect('localhost', 'rashed', 'rashed');
// mysql_select_db('inventory', $connect);
$db_name = 'mysql:host=localhost;dbname=inventory';
$user = 'root';
$psk = '';
$connect = new PDO($db_name, $user, $psk);

session_start();

// Register session variables (deprecated)
// session_register('type');
// session_register('user_id');

$_SESSION['type'] = isset($_SESSION['type']) ? $_SESSION['type'] : null;
$_SESSION['user_id'] = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
