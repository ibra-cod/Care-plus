<?php 

namespace App\Models;

use PDO;
use PDOException;
use App\Entity\User;
use Core\Models\Models;
use Core\Database\Database;

class UserModel extends Models
{

    public function __construct(Database $database) {
        parent::__construct($database, User::class);
    }

    /**
     * @return User[]
     */
    public function getUsers(): array
    {
            return $this->selectAll();
    }

    public function getUserByEmail(string $email): array
    {
            return $this->PDORequest(
                "SELECT * FROM {$this->getTable()}  WHERE email = :email",
                ['email' => $email], true
            );
    }

    
}
