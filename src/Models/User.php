<?php 

namespace App\Models;

use PDO;
use PDOException;
use Core\Database\Database;

class User
{

    private string $table = 'users';

    private PDO $pdo;
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }


    public function all () {
        $stmt = $this->pdo->query("SELECT * FROM {$this->table}");
        $data = $stmt->fetchAll();
        return $data;
    }


}
