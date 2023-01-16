<?php
namespace Delvego\PhpUpper\Database;

use \PDO;
use Delvego\PhpUpper\Traits\SingletonTrait;

use Delvego\PhpUpper\Config\DBConfig;

class Database
{
    use SingletonTrait;

    private PDO $db;

    public function getDb(): PDO
    {
        return $this->db;
    }

    protected function init(): void
    {
        $dbConfig = DBConfig::get();
        $this->db = new PDO($dbConfig['DSN'], $dbConfig['user'], $dbConfig['pass']);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
