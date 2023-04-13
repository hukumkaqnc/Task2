<?php
session_start();
function pdo(): PDO
{
    static $pdo;
    if (!$pdo) {
        $config = include('bd_config.php');
        $dsn = 'mysql:dbname='.$config['db_name'].';host='.$config['db_host'];
        $pdo = new PDO($dsn, $config['db_user'], $config['db_pass']);
    }

    return $pdo;
}
?>