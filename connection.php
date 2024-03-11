<?php 
$db = new PDO('mysql:host=DB_HOST;port=3306;dbname=DB_DATABASE;charset=utf8', 'DB_USERNAME', 'DB_PASSWORD');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
