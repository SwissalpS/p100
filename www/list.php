<?php
$sBasePath = realpath(__DIR__ . '/..');
require_once($sBasePath . '/conf/bootstrap.php');
require_once(Sp100pATHcLASSES . 'list.php');

// only handle GET requests
if (!List::isGet()) List::ko();
// init and run NIC interface
List::so()->run();

?>
