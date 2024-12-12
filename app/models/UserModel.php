<?php
namespace App\Models;

use Core\Model;

class UserModel extends Model {
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
