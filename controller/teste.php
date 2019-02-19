<?php
$single=$_GET['single'];
if($single==5){
    header('HTTP/1.0 404 Not Found');
}else{
    print $single;
}
sleep(2);

//pega o single
//busca pelo single
//verifica o status
//se o status for igual a 200 salva
//curl "http://cisco.local/teste?single=[1-1000000]" -s

function getHttpCode($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("User-Agent:  Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:65.0) Gecko/20100101 Firefox/65.0"));
    $result = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return $code;
}
?>
