<?php

namespace core;

use PDO;

class Database
{

    protected $connection;

    protected $statement;

    public function __construct($config, $user = 'root', $password = '')
    {
        $dsn = "mysql:" . http_build_query($config['database'], '', ';');

 

        $this->connection = new PDO($dsn, $user, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        $this->statement = $stmt;
        return $this;
    }


    public function find()
    {
        return $this->statement->fetch();
    }
    public function findAll()
    {
        return $this->statement->fetchAll();
    }
}
