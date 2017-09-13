<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'excelreader');
 $connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
//$db = new PDO('mysql:host=localhost;dbname=excelreader;charset=utf8mb4', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false, 
                                                                                                //PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>