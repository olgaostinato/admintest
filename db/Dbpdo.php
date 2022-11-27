<?php
namespace db;

use PDO;

class Dbpdo
{

    private $pdo;

    public function __construct()
    {
        $db = (require 'config/db.php');

        $this->pdo = new PDO(
            'mysql:host=' . $db['host'] . ';dbname=' . $db['dbname'],
            $db['user'],
            $db['password']
        );
        $this->pdo->exec('SET NAMES UTF8');
    }

    public function query(string $sql, $params = []): ?array
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);

        if (false === $result) {
            return null;
        }

        return $sth->fetchAll();
    }
}