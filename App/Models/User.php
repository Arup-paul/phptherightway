<?php

namespace App\Models;

use App\Model;

class User extends Model
{
    public function create(string $email,string $name): int
    {
        $stmt = $this->db->prepare(
            'INSERT INTO users (name, email) VALUES (?,?)'
        );
        $stmt->execute([$name,$email]);

        return (int) $this->db->lastInsertId();

    }
}