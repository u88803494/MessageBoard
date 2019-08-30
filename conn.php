<?php
$conn = new mysqli;
/*
$host = '166.62.28.131';
$db_username = 'group4';
$db_password = 'ht4puorg30rtm';
$dbName = 'mtr03group4';
*/
$host = 'localhost';
$db_username = 'root';
$db_password = '123000';
$dbName = 'mentor';

$conn = mysqli_connect($host, $db_username, $db_password, $dbName);
$conn->query('SET NAMES UTF8');
$conn->query("SET time_zone = '+08:00'"); // 調整時區

if (!$conn) { 
    die("連線錯誤: " . mysqli_connect_error()); 
}

/*
phpmyadmin 位置：http://mentor-program.co/huli/phpmyadmin
ftp: group4:mtr03group4th

mysql: group4:ht4puorg30rtm

dbName: mtr03group4
*/

?>