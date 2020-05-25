<?php

class DB_Manager
{
    private $mysqli;

    public function __construct()
    {
        $this->mysqli = new mysqli("localhost", "maksutroman", "123", "comment_system") or die("Unable to connect");
        $this->mysqli->query("SET NAMES 'utf8'");
        $servername = "localhost";
        $username = "username";
        $password = "password";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
    }

    public function Test()
    {
    }
}
 //$DB_Manager db = new DB_Manager();
