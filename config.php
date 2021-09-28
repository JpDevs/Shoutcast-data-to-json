<?php
$ip = "streaming.star105fm.com.br"; //ip da sua stream shoutcast (OBS: sem http://)
$porta = "8000"; // porta da sua stream.
$ssl = 0; //0 para desativar, 1 para ativar.
//-------------------------//
#                          #
# Conexão com o shoutcast #
#                         #
//-----------------------//
if($ssl == 1) {
    $url = "https://" . $ip . ':' . $porta . '/stats?sid=1';
} else {
    $url = "http://" . $ip . ':' . $porta . '/stats?sid=1';
}
/*die($url);*/
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$sc = curl_exec ($ch);
curl_close($ch);
//By JpDevs
//https://jpdevs.com.br
?>