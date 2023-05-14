<?php
function jsonSelect($jsonInput, $key) {
    $inDecoded = json_decode($jsonInput);
    $res = $inDecoded->$key;
    return $res;
}
?>