<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$services = $_POST['usluga'];
$budget = $_POST['budget'];
$task = $_POST['task-text'];
$txt = "";
$token = "";
$chat_id = "";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: : ' => $phone,
  'Email: ' => $email,
  'Услуга: ' => $services,
  'Бюджет: ' => $budget,
  'Описание задачи: ' => $task,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: ../index.html');
} else {
  echo "Error";
}

if(empty($user_name)){
  echo "Заполните строку имя!!!";
}
else
?>

