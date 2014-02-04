<?php
class CurlAdaptor {
    function sendHttpGet($url) {
        $tuCurl = curl_init();
        curl_setopt($tuCurl, CURLOPT_URL, $url);
        curl_setopt($tuCurl, CURLOPT_PORT , 443);
        curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($tuCurl, CURLOPT_SSL_VERIFYPEER, false);
        $tuData = curl_exec($tuCurl);
        curl_close($tuCurl);
        return $tuData;
    }
}
?>