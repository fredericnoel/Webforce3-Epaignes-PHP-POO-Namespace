<?php

date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoLoader.php';
spl_autoload_register('classAutoloader');

namespace Coronavirus;

function var_dump() {
    return "Coucou, je suis confine";
}

echo var_dump();

\var_dump('coucou');