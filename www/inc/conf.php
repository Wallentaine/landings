<?php
error_reporting(0);
ob_start();

define('DB_HOST', '94.237.111.155:8989');
define('DB_USER', 'root'); // Имя пользователя
define('DB_PASS', 'root'); // Пароль
define('DB_BASE', 'test'); // Имя базы данных
define('DB_CHARSET', 'utf8');
$connect_db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_BASE) or die('Error: '.mysqli_connect_error());
mysqli_set_charset ($connect_db, DB_CHARSET) or die('Error');