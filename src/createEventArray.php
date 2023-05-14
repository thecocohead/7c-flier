<?php
function createEventArray($result) {
    $events = array();
    foreach($result as $event) {
        //create new object
        $obj = new Event;

        //pull results from json and concatenate date
        $eventId = $event->id;
        $eventYear = $event->start_date_details->year;
        $eventMonth = $event->start_date_details->month;
        $eventDay = $event->start_date_details->day;
        $eventDate = $eventYear . "-" . $eventMonth . "-" . $eventDay;

        //setup object and push to array
        $obj->setId($eventId);
        $obj->setStartDate($eventDate);
        array_push($events, $obj);
    }
    return $events;
}
?>