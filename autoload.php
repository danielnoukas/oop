<?php

try {
    $pdo = new PDO(
        'mysql:host=d82643.mysql.zonevs.eu;dbname=__database_name__',
        '__database_username__', '__database_user_password__'
    );

} catch (PDOException $e) {
    die($e->getMessage());
}

require_once 'model/Task.php';