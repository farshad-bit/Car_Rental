<?php

namespace App\Service;

use PDO;
use PDOException;

require_once __DIR__ . '/../config.php';

class Database
{
    private PDO $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
                DB_USER,
                DB_PASSWORD,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );
        } catch (PDOException $e) {
            echo "Fehler bei der Datenbankverbindung: " . $e->getMessage();
            die();
        }
    }

    public function getPDO(): PDO
    {
        return $this->pdo;
    }

    public function getCars(): array
    {
        try {
            $stmt = $this->pdo->query("SELECT * FROM cars");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Fehler beim Abrufen der Autos: " . $e->getMessage();
            return [];
        }
    }

    public function getUserByUsername($username): ?array
    {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->execute([$username]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Fehler beim Abrufen des Benutzers: " . $e->getMessage();
            return null;
        }
    }

    public function addUser($username, $password, $email): bool
    {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
            $stmt->execute([$username, $password, $email]);
            return true;
        } catch (PDOException $e) {
            echo "Fehler beim Hinzufügen des Benutzers: " . $e->getMessage();
            return false;
        }
    }
}
