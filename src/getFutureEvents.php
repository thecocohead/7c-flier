<?php
function getFutureEvents($baseUrl, $timeZone) {
    date_default_timezone_set($timeZone);
    $endpoint = "events";
    $date = date("Y-m-d");
    $opts = "date_after=$date&per_page=100";
    $formattedURL = "$baseUrl$endpoint?$opts";
    $response = callAPI("GET", $formattedURL);
    $events = jsonSelect($response, "events");

    return $events;
}
?>