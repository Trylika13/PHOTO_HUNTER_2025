<?php
namespace App\Models\PagesModel;
use \PDO;

function findAll(PDO $connexion): array
{
    $sql = "SELECT * 
            FROM authors
            ORDER BY created_at DESC
            LIMIT 3;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);

    $sql = "SELECT * 
            FROM photos
            ORDER BY created_at DESC
            LIMIT 3;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
};

