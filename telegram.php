<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
де, XXXXXXXXXXXXXXXXXXXXXXX - токен вашого бота "$token" */

$name = $_POST['name'];
$phone = $_POST['tel'];
$city = $_POST['city'];
$token = "5865891076:AAExRRdS2DYGieMUfAOgV62Wa9RwnT1QsXo";
$chat_id = "-921341129";
$arr = array(
  'Імя: ' => $name,
  'Телефон: ' => $phone,
  'Місто: ' => $city
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: sended.html');
} else {
  echo "Error";
}
?>