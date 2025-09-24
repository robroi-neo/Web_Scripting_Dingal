<?php

class Database
{

    public $connection;

    public function __construct()
    {
        try {
            // SQLite DSN points to a file
            $dbPath = dirname(__DIR__) . "/notes_mini_app.sqlite";
            $dsn = "sqlite:" . $dbPath;

            $this->connection = new PDO($dsn);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Enable foreign keys (SQLite requires this explicitly)
            $this->connection->exec("PRAGMA foreign_keys = ON");
        } catch (PDOException $e) {
            die("❌ SQLite connection failed: " . $e->getMessage());
        }
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }

    public function commit()
    {
        return $this->connection->commit();
    }

    public function rollBack()
    {
        return $this->connection->rollBack();
    }

    public function lastInsertId()
    {
        return $this->connection->lastInsertId();
    }

    public function beginTransaction()
    {
        return $this->connection->beginTransaction();
    }
}
