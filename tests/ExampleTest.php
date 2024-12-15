<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {
    public function testSample() {
        $this->assertTrue(true);
    }
    public function testPdo() {
        $config = array('db_host' => 'localhost','db_name' => 'framework','db_user' => 'framework','db_pass' => 'W7WSYPYHC38ReAeH');
        $this->db = new \PDO(
            'mysql:host=' . $config['db_host'] . ';dbname=' . $config['db_name'],
            $config['db_user'],
            $config['db_pass']
        );
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
}