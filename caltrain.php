<?php
// https://help.chatfuel.com/facebook-messenger/plugins/json-plugin/
// https://community.chatfuel.com/t/add-serverside-logic-to-your-bot-with-just-10-lines-of-javascript/3543
$html = file_get_html('http://www.caltrain.com/schedules/realtime/stations/22ndstreetstation-mobile.html');


//$ret = $html->find('div[class=ipf-st-ip-trains-subtable-td-arrivaltime]');

$ret = $html->find('div.ipf-st-ip-trains-subtable-td-arrivaltime',0)->children(1)->outertext; 
// Find all images
foreach($ret as $element)
       echo $element . '<br>';

$now = new DateTime();
$thetext = $now->format('Y-m-d H:i:s');
echo '{"messages":[ {"text":"'.$thetext .'"}]}'
?>