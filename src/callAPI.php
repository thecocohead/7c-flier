<?php
function callAPI($method, $url, $data = false) {
    //init
    $curl = curl_init($url);

    //opts
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
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