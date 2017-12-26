
<?php
$servername = '127.0.0.1';
$username= 'mgs_user';
$password = 'pa55word';
$dbname = 'HomeWork8';
$dsn = 'mysql:host='.$servername.';dbname='.$dbname;
$pdo = new PDO($dsn, $username, $password);
?>
