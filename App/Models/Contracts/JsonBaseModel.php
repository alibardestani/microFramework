<?php

namespace App\Models\Contracts;

class JsonBaseModel extends BaseModel {
    private $db_folder;
    public function __construct()
    {
        $this->db_folder = BASEPATH . "/storage/jsondb/";
    }

    public function creat(array $data) : int
    {
        $data_json = json_encode($data);
        $table_file = $this->db_folder;
        return 1;
    }
    public function find($id) : object
    {
        return (object)[];
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