<?php

namespace App\Model;

interface ModelInterface
{
    public function getAll();
    
    public function getById($id);

    public function getAllUsers(): array;

    public function getUserById(int $id): ?array;

    public function addUser(string $username, string $password, string $email): bool;

    public function updateUser(int $id, string $username, string $password, string $email): bool;

    public function deleteUser(int $id): bool;
}
