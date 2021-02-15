<?php
// Файлы phpmailer
require 'sendManufactureForm/PHPMailer.php';
require 'sendManufactureForm/SMTP.php';
require 'sendManufactureForm/Exception.php';

// Переменные, которые отправляет пользователь
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Формирование самого письма
$title = "Письмо с формы <<Сотрудничество с Халкмаркетом>>";
$body = "
<h2>Новое письмо</h2>
<b>Имя:</b> $firstname<br>
<b>Фамилия:</b> $lastname<br>
<b>Почта:</b> $email<br>
<b>Телефон:</b> $phone<br>
<b>Сообщение:</b> $message<br>
";

// Валидация почты
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

// Настройки PHPMailer
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    try {
        $mail->isSMTP();
        $mail->CharSet = "UTF-8";
        $mail->SMTPAuth   = true;
        //$mail->SMTPDebug = 2;
        $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

        // Настройки вашей почты
        $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
        $mail->Username   = 'm.yurkevich@imdatel.tm'; // Логин на почте
        $mail->Password   = 'sonoma7'; // Пароль на почте
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('m.yurkevich@imdatel.tm', 'Форма сотрудничества'); // Адрес самой почты и имя отправителя

        // Получатель письма
        $mail->addAddress('m.yurkevich@imdatel.tm');
//        $mail->addAddress('r.durdyev@imdatel.tm'); // Ещё один, если нужен


// Отправка сообщения
        $mail->isHTML(true);
        $mail->Subject = $title;
        $mail->Body = $body;

// Проверяем отравленность сообщения
        if ($mail->send()) {$result = "success";}
        else {$result = "error";}

    } catch (Exception $e) {
        $result = "error";
        $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
    }
} else {
    $result = "email";
}
// Отображение результата
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);

?>
