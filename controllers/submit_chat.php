<?php

$message = trim(utf8_decode($_POST["message"]));
$is_connected = $_POST["is_connected"];
$str_recipients = $_POST["id_recipients"];
$id_user = (int)$_SESSION['id'];

//Formater les destinataires en cas de tentative d'injection
$formatted_recipients = "";
$id_recipients = explode(",", $str_recipients);
if (count($id_recipients) > 0) {
    $temp_array = array();
    foreach ($id_recipients as $id_recipient) {
        $id_recipient = (int)$id_recipient;
        if ($id_recipient > 0 && UtilisateurDAO::selectById($id_recipient)) {
            $temp_array[] = $id_recipient;
        }
    }
    $formatted_recipients = implode(",", $temp_array);
}else{
    $formatted_recipients = "0";
}

$chat = new Chat();
$chat->time_msg = (new DateTime("now", new DateTimeZone(DATETIME_ZONE)))->getTimestamp();

if (strlen($message) > 0) {
    if ($is_connected) {
        $chat->id_recipients = $formatted_recipients;
        $chat->id_sender = $id_user;
        $chat->msg = $message;
    }else{
        $chat->id_recipients = $id_user;
        $chat->id_sender = 0;
        $chat->msg = utf8_decode("Vous n'êtes pas connecté au chat.");
    }
}else{
    $chat->id_recipients = $id_user;
    $chat->id_sender = 0;
    $chat->msg = utf8_decode("Aucun message saisi.");
}

//send into chat
ChatDAO::add($chat);