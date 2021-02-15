<?php

$pdo = new PDO('mysql:dbname=php-docker;host=mysql', 'aminu', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL Version:' . $row['Value'];

phpinfo();