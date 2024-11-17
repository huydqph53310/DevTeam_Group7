<?php
class ConnectDatabase extends Config
{
    public $connect;
    public $statusConnect;

    public function __construct()
    {
        try {
            // Sử dụng các hằng số từ lớp Config
            $this->connect = new PDO(
                "mysql:host=" . self::MYSQL . ";port=" . self::PORT . ";dbname=" . self::DB_NAME,
                self::USERNAME,
                self::PASSWORD
            );
            $this->statusConnect = true;
        } catch (Exception $e) {
            $this->statusConnect = false;
            echo "Lỗi kết nối: " . $e->getMessage();
        }
    }

    public function __destruct()
    {
        $this->connect = null;
    }
}


