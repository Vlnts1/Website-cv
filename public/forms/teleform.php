//
<?php
$chat_id = -1001605033730;
$text = "Новый вопрос\nЗаказчик: $_POST['name']\n$_POST['email']\nТема: $_POST['subject']\n$_POST['message']");
// following ones are optional, so could be set as null
$disable_web_page_preview = null;
$reply_to_message_id = null;
$reply_markup = null;
$parse_mode = 'html';

$data = array(
        'chat_id' => urlencode($chat_id),
        'text' => ($text),
        'parse_mode' => urlencode($parse_mode),
        'disable_web_page_preview' => urlencode($disable_web_page_preview),
        'reply_to_message_id' => urlencode($reply_to_message_id),
        'reply_markup' => urlencode($reply_markup)
    );

$url = "https://api.telegram.org/bot5265479112:AAFqBj8gAaUlNwEUzk2eXQGPd5n8CZm3QBw/sendMessage";

//  open connection
$ch = curl_init();
//  set the url
curl_setopt($ch, CURLOPT_URL, $url);
//  number of POST vars
curl_setopt($ch, CURLOPT_POST, count($data));
//  POST data
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//  To display result of cur
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//  execute post
$result = curl_exec($ch);
//  close connection
curl_close($ch);
     ?>