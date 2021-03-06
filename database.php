<?php 

class Connection
{
    public static function connect(): PDO
    {
        try {
            $connect = new PDO('mysql:host=localhost;dbname=db_veterinary;port=3310;', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ]);
            $connect->exec("SET CHARACTER SET UTF8");
            return $connect;
        } catch (PDOException $e) {
            die("MySQL connection error: " . $e->getMessage());
        }
    }
}


?>
