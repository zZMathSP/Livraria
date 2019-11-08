<?php

$request = array('REQUEST' => $_REQUEST, 'GET' => $_GET, 'POST' => $_POST, 'COOKIE' => $_COOKIE);
$init = IDS_Init::init('lib/IDS/Config/Config.ini.php');
$ids = new IDS_Monitor($request, $init);
$result = $ids->run();

if (!$result->isEmpty()) {
    echo $result;
    die;
}