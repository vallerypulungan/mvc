<?php
class koneksiMVC
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "tugas7paw";

    public function getConnection()
    {
        return new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
    }
}