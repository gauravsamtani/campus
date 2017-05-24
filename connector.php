
<?php


$db_host		= 'mysql.hostinger.in';
$db_user		= 'u321707978_campu';
$db_pass		= 'gaurav1994';
$db_database	= 'u321707978_campu'; 

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
