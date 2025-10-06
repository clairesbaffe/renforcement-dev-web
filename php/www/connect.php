<?php
    $config = parse_ini_file('/var/www/config.ini');

    $host = $config['db_host'];
    $username = $config['db_user'];
    $password = $config['db_password'];
    $db = $config['db_name'];

    // Connexion avec pdo mysql
    $db = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
?>