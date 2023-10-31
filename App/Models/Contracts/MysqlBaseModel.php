<?php

namespace App\Models\Contracts;


use App\Core\Request;
use PDO;

class MysqlBaseModel extends BaseModel{
    protected function __construct()
    {
        try{
            $this->connection = new PDO("mysql:dbname={$_ENV['DB_NAME']};host={$_ENV['DB_HOST']};port={$_ENV['DB_PORT']}", $_ENV['DB_USER'], $_ENV['DB_PASS']);
            $this->connection->exec("set names utf8;");
        }   catch (\PDOException $e){
            echo "Connection Failed: " . $e->getMessage();
        }
    }
    public function create(array $new_data) : int
    {
        return 1;
    }
    public function find($id) : object
    {
        return (object)[];
    }
    public function getAll() : array{
    }
    public function get(array $columns, array $where) : array
    {
        return [];
    }
    public function update(array $data, array $where) : int
    {
        return 1;
    }
    # Delete
    public function delete(array $where) : int
    {
        return 1;
    }
}