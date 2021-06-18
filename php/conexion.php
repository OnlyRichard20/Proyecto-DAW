<?php
include 'class.pdofactory.php';

$dsn = "mysql:host=fdb32.atspace.me;dbname=3869575_proyecto";
$objPDO = new PDO($dsn, "3869575_proyecto", "P@ssw0rd",array()); 
$objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>