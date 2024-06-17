<?php

namespace App\Model;

use App\Service\Database;
use Envms\FluentPDO\Query;
use App\Model\ModelInterface;


class UserModel implements ModelInterface
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllUsers(): array
    {
        try {
            $stmt = $this->pdo->query("SELECT * FROM users");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Fehler behandeln oder protokollieren
            return [];
        }
    }

    public function getUserById(int $id): ?array
    {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE user_id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
        } catch (PDOException $e) {
            // Fehler behandeln oder protokollieren
            return null;
        }
    }

    public function addUser(string $username, string $password, string $email): bool
    {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
            return $stmt->execute([$username, $password, $email]);
        } catch (PDOException $e) {
            // Fehler behandeln oder protokollieren
            return false;
        }
    }

    public function updateUser(int $id, string $username, string $password, string $email): bool
    {
        try {
            $stmt = $this->pdo->prepare("UPDATE users SET username = ?, password = ?, email = ? WHERE user_id = ?");
            return $stmt->execute([$username, $password, $email, $id]);
        } catch (PDOException $e) {
            // Fehler behandeln oder protokollieren
            return false;
        }
    }

    public function deleteUser(int $id): bool
    {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM users WHERE user_id = ?");
            return $stmt->execute([$id]);
        } catch (PDOException $e) {
            // Fehler behandeln oder protokollieren
            return false;
        }
    }
}
