<?php
function listFiles($gDriveKey, $gDriveFolder, $gDriveEndPt) {
    $urlData = "q=\"$gDriveFolder\"+in+parents+and+trashed+=+false&key=$gDriveKey";
    $url = "$gDriveEndPt?$urlData";
    $gDriveRes = callAPI("GET", $url);
    $items = jsonSelect($gDriveRes, "items");
    $fileArr = array();
    foreach($items as $file) {
        //create obj
        $flier = new Flier;
        $flierDate = strtok($file->title, ".");
        $flier->setName($flierDate);
        $flier->setURL($file->downloadUrl);
        array_push($fileArr, $flier);
    }
    return $fileArr;
}
?>