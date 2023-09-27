<?php

namespace App\Config;
class DbConfig
{
    private string $hostname = 'localhost';
    private string $dbName = 'exampleDatabase';
    private string $username = 'root';
    private string $password = '';

    public function getHostname() : string
    {
        return $this->hostname;
    }
    public function getDbName() : string
    {
        return $this->dbName;
    }

    public function getPassword() : string
    {
        return $this->password;
    }

    public function getUsername() : string
    {
        return $this->username;
    }
}