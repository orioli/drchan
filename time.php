<?php
// https://help.chatfuel.com/facebook-messenger/plugins/json-plugin/
$now = new DateTime();
$text = array('text' => $now->format('Y-m-d H:i:s'));
$messages = array('messages' => $text);
echo json_encode($messages, JSON_FORCE_OBJECT);
?>