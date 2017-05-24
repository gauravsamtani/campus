<?php

// error_reporting(E_ALL ^ E_DEPRECATED);
// $mysql_hostname = "localhost";
// $mysql_user = "root";
// $mysql_password = "";
// $mysql_database = "campus";
// $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password);
//$db = new PDO('mysql:host='.$mysql_hostname.';dbname='.$mysql_database.';charset=utf8', $mysql_user, $mysql_password);
// if (!$bd)
// {
// die("Opps some thing went wrong 1");
// }
//else
//{
//    echo("ok connected");
//}
// mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong 2");
//echo("count is one 1");
$dbC = mysqli_connect("mysql.hostinger.in", "u321707978_campu", "gaurav1994", "u321707978_campu");
if(!$dbC)
{
	die('Error Connecting to MySQL DataBase');
}
?>

