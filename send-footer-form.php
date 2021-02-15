<?php
// Файлы phpmailer
require 'sendFooterForm/PHPMailer.php';
require 'sendFooterForm/SMTP.php';
require 'sendFooterForm/Exception.php';

// Переменные, которые отправляет пользователь
$message = $_POST['message'];

// Формирование самого письма
$title = "Письмо с формы <<Вопросы и пожелания>>";
$body = "
<h2>Новое письмо</h2>
<b>Сообщение:</b> $message<br>
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.ru';
    $mail->Username   = 'm.yurkevich@imdatel.tm';
    $mail->Password   = 'sonoma7';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('m.yurkevich@imdatel.tm', 'Форма вопросов и пожеланий');

    // Получатель письма
    $mail->addAddress('m.yurkevich@imdatel.tm');
//    $mail->addAddress('r.durdyev@imdatel.tm'); // Ещё один, если нужен


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

// Отображение результата
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);

?>
