<?php
class DBcon{
    private $host = "localhost";
    private $user ="root";
    private $password = "";
    private $database = "regiform";
    private $conn;

    function __construct()
    {
        $this->conn = $this->connectDB();
    }

    function connectDB()
    {
        $conn = mysqli_connect($this->$host, 
        $this->$user, $this->$password, $this->$database);
    }

    function runQuery($query){
        $result = mysqli_query($this->conn, $query);
        while($row = mysqli_fetch_assoc($result)){
            $resultSet[] = $row;
        }
        if(!empty($resultSet))
        return $resultSet;
    }

    function numRows($query){
        $result = mysqli_query($this->conn, $query);
        $rowCount = mysqli_num_rows($result);
        return $rowCount;
    }

    function executeQuery($query){
        $result = mysqli_query($this->conn, $query);
        return $result;
    }
}
?>