<?php 
try {
    $connexion = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    echo $e->message;
    // echo "C'est bien balot mais y a un stuut !";
}