<?php


require('functions.php');


class Database
{

    public $connection;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;port=3306;dbname=notes_mini_app_db;charset=utf8mb4';
        $username = 'root';
        $password = '';

        $this->connection = new PDO($dsn, $username, $password);
    }
    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}

$db = new Database();
$db->query('SELECT * from users');

dd($db->query('SELECT * from hobbies')->fetch(PDO::FETCH_ASSOC));
