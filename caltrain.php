<?php
include 'simple_html_dom.php';
// https://help.chatfuel.com/facebook-messenger/plugins/json-plugin/
$html = file_get_html('http://www.caltrain.com/schedules/realtime/stations/22ndstreetstation-mobile.html');
foreach($html->find('.ipf-caltrain-table-trains') as $element)
       echo $element . '<br>';

?>