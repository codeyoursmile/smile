<?php
namespace Core;

class Model {
    protected $db;
    public function __construct() {
        $config = require BASE_PATH . '/config/config.php';
        $this->db = new \PDO(
            'mysql:host=' . $config['db_host'] . ';dbname=' . $config['db_name'],
            $config['db_user'],
            $config['db_pass']
        );
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
}
