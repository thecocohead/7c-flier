<?php
//ok i hate this
//fuck big O notation, all my homies hate big O notation
function arrCmp($events, $fliers) {
    foreach($events as $event) {
        //O(n)
        foreach($fliers as $flier) {
            //O(n^2)
            $flierDate = $flier->getName();
            $eventDate = $event->getStartDate();
            //pain
            if(strcmp($flierDate, $eventDate) == 0) {
                $event->setImage($flier->getURL());
            }
        }
    }    
}
?>