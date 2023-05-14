<?php
function allPublish($eventArr, $username, $password, $endpoint) {
    foreach($eventArr as $event) {
        $event->publishChanges($username, $password, $endpoint);
    }
}
?>