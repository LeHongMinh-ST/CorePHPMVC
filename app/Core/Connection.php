<?php

namespace app\Core;

class Connection
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    function __construct()
    {
        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '798960';
        $this->dbname = 'blog.minh.php';
    }

    function connect()
    {

        $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        mysqli_set_charset($conn, "UTF8");
        if ($conn->connect_errno) {
            echo "fail" . $conn->connect_error;
            exit();
        }

        return $conn;
    }
}