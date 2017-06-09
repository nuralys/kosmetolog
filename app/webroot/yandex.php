<?
require_once "SendMailSmtpClass.php"; // подключаем класс
 
$mailSMTP = new SendMailSmtpClass('st-kotel.kz@yandex.ru', 'Kazakhstan123', 'ssl://smtp.yandex.ru', 'st-kotel.kz', 465);
// создаем экземпляр класса

// $mailSMTP = new SendMailSmtpClass('логин', 'пароль', 'хост', 'имя отправителя');
 
// заголовок письма
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
$headers .= "From: st-kotel.kz <st-kotel.kz@yandex.ru>\r\n"; // от кого письмо
$result =  $mailSMTP->send('orb.effect@mail.ru', 'Тема письма', 'Текст письма', $headers); // отправляем письмо
// $result =  $mailSMTP->send('Кому письмо', 'Тема письма', 'Текст письма', 'Заголовки письма');
if($result === true){
    echo "Письмо успешно отправлено";
}else{
    echo "Письмо не отправлено. Ошибка: " . $result;
}

?>