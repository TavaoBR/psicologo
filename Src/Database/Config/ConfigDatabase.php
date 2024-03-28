<?php 

namespace Src\Database\Config;

abstract class ConfigDatabase {
 
    protected function db()
    {
        $db = "mysql";
        return $db;
    }

    protected function host()
    {
        $host = "127.0.0.1";
        return $host;
    }

    protected function user()
    {
        $user = "root";
        return $user;
    }

    protected function password()
    {
        $password = "";
        return $password;
    }

    protected function dbname()
    {
        $dbname = "psicologo";
        return $dbname;
    }

    protected function port()
    {
        $port = 3306;
        return $port;
    }

    
}