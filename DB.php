<?php

declare(strict_types=1);

class DB
{
    public static function connect(): PDO
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=currency_converter', 'root', '1234');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("DB Connection failed: " . $e->getMessage());
        }
    }
}
