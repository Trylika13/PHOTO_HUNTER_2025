<?php
namespace App\Models\CategoriesModels;
use \PDO;

function findAll(PDO $connexion): array
{
    $sql = "SELECT *
            FROM categories
            ORDER BY created_at DESC;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}