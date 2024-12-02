<?php

class Client
{
    public $CLientId;
    public $name;
    public $username;
    public $pass;
    public $email;
    public $phone;
    public $action;
    public $ban;
    public $vip;
    public $datejoin;
    public $point;
    public $address;
    public $sdt;
    public function __construct($CLientId = null, $name = null, $username = null, $pass = null, $email = null, $phone = null, $action = null, $ban = null, $vip = null, $datejoin = null, $point = null, $address = null, $sdt = null)
    {
        $this->CLientId = $CLientId;
        $this->name = $name;
        $this->username = $username;
        $this->pass = $pass;
        $this->email = $email;
        $this->phone = $phone;
        $this->action = $action;
        $this->ban = $ban;
        $this->vip = $vip;
        $this->datejoin = $datejoin;
        $this->point = $point;
        $this->address = $address;
        $this->sdt = $sdt;
    }
}
class ClientModel extends ConnectDatabase
{

    public function CheckUsername($username)
    {
        try {
            //code...
            $this->connect->query("USE " . parent::DB_NAME);
            $sql = "SELECT username FROM `users` WHERE `username` like `$username`";
            $data = $this->connect->prepare($sql);
            $data->execute();
            $data->fetch(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $err) {
            //throw $th;
        }
    }
    public function getClientById($id)
    {
        try {
            $this->connect->query("USE " . parent::DB_NAME);
            // Sử dụng prepared statement để tránh SQL Injection
            $sql = "SELECT *
                    FROM users 
                    JOIN client ON users.users_id = client.users_id 
                    WHERE users.users_id = $id";
            // Chuẩn bị câu lệnh SQL
            // c1
            // $dataClient = $this->connect->query($sql)->fetch();
            // c2
            $stmt = $this->connect->prepare($sql);
            // Thực thi câu lệnh và lấy dữ liệu
            $stmt->execute();
            $dataClient = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($dataClient !== false) {
                // Khởi tạo đối tượng Client và InfoClient
                $accountInfo = new Client(
                    $dataClient["users_id"],
                    $dataClient["name"],
                    $dataClient["username"],
                    $dataClient["password"],
                    $dataClient["email"],
                    $dataClient["phone"],
                    $dataClient["action"],
                    $dataClient["ban"],
                    $dataClient["ngaythamgia"],
                    $dataClient["point"],
                    $dataClient["premium"],
                    $dataClient["diachi"],
                    $dataClient["SDT"]
                );
                return $accountInfo;
            }
        } catch (Exception $err) {
            // Xử lý lỗi
            $logMessage = "Lỗi truy vấn: " . $err->getMessage() . " at " . date('[Y-m-d H:i:s]');
            error_log($logMessage . PHP_EOL, 3, $this->filePath);
        } // Trả về null nếu không tìm thấy dữ liệu
    }

    public function reigisterClient($data)
    {
        // code đăng ký tài khoản mới cho client
        try {
            // Chuyển sang database cần dùng
            $this->connect->query("USE " . parent::DB_NAME);

            // Bắt đầu transaction
            $this->connect->beginTransaction();

            // Bước 1: Chèn dữ liệu vào bảng `users`
            $sql1 = "INSERT INTO `users` (`users_id`, `name`, `username`, `password`, `email`, `phone`, `action`, `ban`) 
                     VALUES (NULL, :name, :username, :pass, :email, :phone, '0', '0')";
            $stmt1 = $this->connect->prepare($sql1);
            $stmt1->execute([
                ':name' => $data->name,
                ':username' => $data->username,
                ':pass' => $data->pass,
                ':email' => $data->email,
                ':phone' => $data->phone
            ]);

            // Bước 2: Lấy ID của bản ghi `users` vừa được chèn
            $new_user_id = $this->connect->lastInsertId();

            // Bước 3: Chèn dữ liệu vào bảng `client` với `users_id` lấy từ bước trước
            $sql2 = "INSERT INTO `client` (id, users_id, diachi, SDT) VALUES (NULL, :new_user_id, :diachi, :phone)";
            $stmt2 = $this->connect->prepare($sql2);
            $stmt2->execute([
                ':new_user_id' => $new_user_id,
                ':diachi' => $data->address, // giá trị cố định
                ':phone' => $data->phone
            ]);

            // Commit transaction nếu không có lỗi
            $this->connect->commit();
            // $logMessage nội dung tin nhắn
            // message_type 3 có quyền ghi file
            // destination đường dẫn đến file log
            $logMessage = $data->username . " Đã đăng kí thành công " . " at " . date('[Y-m-d H:i:s]');
            error_log($logMessage . PHP_EOL, 3, $this->filePath);
            // Trả về kết quả thành công
            return true;
        } catch (PDOException $e) {
            // Rollback nếu có lỗi
            $this->connect->rollBack();
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    public function loginClient($iduser)
    {
        // code login
        try {
            $mees = new WriteLog();
            $sql = "SELECT users_id,email, username, password FROM `users` WHERE username like '%$iduser%'";
            $this->connect->query("USE " . parent::DB_NAME);
            $dataCheck = $this->connect->query($sql)->fetch();
            if ($dataCheck != false) {
                $userLogin = new Client($dataCheck["users_id"], null, $dataCheck["username"], $dataCheck["password"], $dataCheck["email"]);
                $logMessage = $iduser . " Đã đăng nhập thành công " . " at " . date('[Y-m-d H:i:s]');
                $mees->logToJson($logMessage);
                return $userLogin;
            }
            //code...
        } catch (Exception $err) {
            //throw $th;
        }
    }
    public function updateClient($id, $data)
    {
        // code đăng ký tài khoản mới cho client
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;
        }
    }
    public function deleteClient($id)
    {
        // code đăng ký tài khoản mới cho client
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;
        }
    }
    public function getAllClientById()
    {
        // code đăng ký tài khoản mới cho client
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;
        }
    }

    public function getClientOders($clientId)
    {
        // code đăng ký tài khoản mới cho client
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;
        }
    }
}
