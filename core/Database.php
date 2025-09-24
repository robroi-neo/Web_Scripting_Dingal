<?php

class Database
{

    public $connection;

    public function __construct(array $config = [], $username = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $username, $password);
    }
    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}
