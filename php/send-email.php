<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $membership = $_POST['membership'];
    $payment = $_POST['payment'];
    $note = $_POST['note'];

    $to = "nhnhuyngth@gmail.com"; 

    $subject = "Đăng Ký Gói Member Crazt Shop";

    // Nội dung email
    $message = "
    <html>
    <head>
    <title>Đăng Ký Gói Member Crazy Shop</title>
    </head>
    <body>
    <h2>Thông tin người đăng ký:</h2>
    <p><strong>Họ và tên:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Số điện thoại:</strong> $phone</p>
    <p><strong>Gói đăng ký:</strong> $membership</p>
    <p><strong>Phương thức thanh toán:</strong> $payment</p>
    <p><strong>Ghi chú:</strong> $note</p>
    </body>
    </html>
    ";

    // Định dạng header cho email HTML
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Các thông tin header khác
    $headers .= 'From: <'.$email.'>' . "\r\n"; // Thư sẽ gửi từ địa chỉ email người đăng ký
    $headers .= 'Reply-To: ' . $email . "\r\n";

    // Gửi email
    if(mail($to, $subject, $message, $headers)) {
        echo "Cảm ơn bạn đã đăng ký. Chúng tôi sẽ liên hệ với bạn sớm.";
    } else {
        echo "Có lỗi xảy ra khi gửi email. Vui lòng thử lại.";
    }
}
?>
