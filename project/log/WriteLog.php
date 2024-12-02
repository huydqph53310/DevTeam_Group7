<?php 
class WriteLog{
    function logToJson($message, $filePath = 'log.json') {
        // Đảm bảo file log tồn tại, nếu không tạo mới
        if (!file_exists($filePath)) {
            file_put_contents($filePath, json_encode([])); // Tạo file JSON rỗng
        }
    
        // Đọc nội dung hiện tại của file JSON
        $logs = json_decode(file_get_contents($filePath), true);
    
        if (!$logs) {
            $logs = []; // Nếu không phải là mảng hợp lệ, khởi tạo mảng rỗng
        }
    
        // Tạo một log entry mới
        $logEntry = [
            'timestamp' => date('Y-m-d H:i:s'), // Thời gian log
            'message' => $message,             // Nội dung log
        ];
    
        // Thêm log mới vào danh sách
        $logs[] = $logEntry;
    
        // Ghi lại dữ liệu JSON vào file
        file_put_contents($filePath, json_encode($logs, JSON_PRETTY_PRINT));
    }
    
    // Gọi hàm để ghi log
}

