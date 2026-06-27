<?php
// config/database.php
class Database {
    private $host = "sql100.byetcluster.com";
    private $db_name = "if0_41736421_pesantren_tahfidz";
    private $username = "if0_41736421";
    private $password = "4AgWWZdpPpnF";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, 
                                  $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

// Start session jika belum
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>