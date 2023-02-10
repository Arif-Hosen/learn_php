<?php 
// namespace Bangladesh;
include_once 'namespaces.php';
include_once 'namespaces3.php';
use Bangladesh\B as BD;
use Canada\C as CND;


$country = new BD\Infos();
$country->displayInfo();
BD\hello();

$country = new CND\Infos();
$country->displayInfo();
CND\hello();
?>