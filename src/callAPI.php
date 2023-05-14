<?php
function callAPI($method, $url, $data = false, $username = false, $password = false) {
    //init
    $curl = curl_init($url);

    //opts
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    if($method == "POST") {
        //post setup
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_USERPWD, "$username:$password");
    }
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