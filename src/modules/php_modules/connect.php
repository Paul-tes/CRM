<?php
class connect
{
    private $host = 'localhost';
    private $user = 'root';
    private $pw = '';
    private $db = 'crm';
    function getConnection()
    {
        $con = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if (!$con) {
            die('There is a connection error: ' . mysqli_connect_error());
        }
        return $con;
    }
}
?>