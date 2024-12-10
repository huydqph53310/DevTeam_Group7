
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Hàng Thành Công</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* Thiết lập bố cục và kiểu chữ cơ bản */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 600px;
    text-align: center;
}

.order-success {
    padding: 20px;
}

.success-title {
    font-size: 32px;
    color: #4CAF50;
    margin-bottom: 10px;
}

.success-message {
    font-size: 18px;
    color: #555;
    margin-bottom: 20px;
}

.order-details {
    text-align: left;
    margin-bottom: 20px;
}

.order-heading {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
}

ul {
    list-style: none;
    font-size: 16px;
    color: #333;
}

ul li {
    margin-bottom: 8px;
}

.next-steps p {
    font-size: 16px;
    color: #555;
    margin-bottom: 10px;
}

.btn-back-home {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007BFF;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.btn-back-home:hover {
    background-color: #0056b3;
}
</style>
<body>
    <div class="container">
        <div class="order-success">
            <h1 class="success-title">Đặt Hàng Thành Công!</h1>
            <p class="success-message">Cảm ơn bạn đã đặt hàng tại cửa hàng của chúng tôi. Đơn hàng của bạn đã được xác nhận và sẽ được xử lý sớm nhất!</p>
            <div class="next-steps">
                <p>Vui lòng kiểm tra email của bạn để nhận thông tin về đơn hàng và vận chuyển.</p>
                <a href="http://127.0.0.1/duan1/project/?wh=home" class="btn-back-home">Tiếp tục mua sắm</a>
            </div>
        </div>
    </div>
</body>
</html>
