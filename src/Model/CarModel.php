<?php

namespace App\Model;

use App\Service\Database;
use Envms\FluentPDO\Query;
use PDOStatement;

class CarModel implements ModelInterface
{
    private Query $db;

    public function __construct()
    {
        $this->db = (new Database())->getFluent();
    }

    public function findAll(): mixed
    {
        return $this->db->from('cars')->fetchAll();
    }

    public function findById($id): mixed
    {
        return $this->db->from('cars')->where('id', $id)->fetch();
    }
}