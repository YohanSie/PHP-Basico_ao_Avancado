<?php 

namespace bng\Models;

use bng\System\Database;

abstract class BaseModel
{
    public $db;

    public function db_connect()
    {
        $options = [
            'host' => MYSQL_HOST,
            'dbname' => MYSQL_DATABASE,
            'username' => MYSQL_USERNAME,
            'password' => MYSQL_PASSWORD,
            'port' => MYSQL_PORT
        ];
        $this->db = new Database($options);
    }

    public function query($sql = "", $params = [])
    {
        return $this->db->execute_query($sql);
    }
}