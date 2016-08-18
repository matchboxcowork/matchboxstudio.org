<?php

$MBX_CONF = array(
    // The needed information to connect to the database. Follows the PDO
    // syntax, described at http://php.net/manual/en/pdo.construct.php
    // Examples include:
    //   'mysql:host=localhost;dbname=mbx'  for a mysql server
    //   'sqlite:/path/do/database.sqlite3' for a sqlite database
    'db_source'         => 'sqlite:' . realpath(__DIR__ . '/../../dev_db.sqlite3'),

    // Database credentials
    'db_username'       => '',
    'db_password'       => '',

    // SMTP mail sending credentials
    'smtp_host'         => 'localhost',
    'smtp_port'         => 1025,
    'smtp_enc'          => '',
    'smtp_username'     => '',
    'smtp_password'     => '',
);
?>
