<?php 
class DBconnect{
    public $dbconn;
    function __construct()
    {
        try{
            $host = 'localhost';
            $dbname = 'productdatabase';
            $username = "root";

            $this->dbconn = new PDO('mysql:host='.$host.';dbname='.$dbname, $username);
        }catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}
?>