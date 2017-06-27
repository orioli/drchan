<?php
// https://help.chatfuel.com/facebook-messenger/plugins/json-plugin/
// https://community.chatfuel.com/t/add-serverside-logic-to-your-bot-with-just-10-lines-of-javascript/3543

$now = new DateTime();
$thetext = $now->format('Y-m-d H:i:s');
echo '{"messages":[ {"text":"'.$thetext .'"}]}'
?>