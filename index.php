<?php

date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoLoader.php';
//spl_autoload_register('classAutoloader');

require __DIR__ . '/classes/Michel/TestNameSpace.php';


$toto = new Michel\TestNameSpace();
echo $toto->display();