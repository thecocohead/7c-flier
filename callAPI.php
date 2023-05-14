<?php
function CallAPI($method, $url, $data = false) {
    //init
    $curl = curl_init($url);

    //opts

    //exec
    $result = curl_exec($curl);

    //check for error
    if(!$result) {
        //error occured
        echo curl_error($curl);
    }
    //close
    curl_close($curl);
    return $result;

}
?>