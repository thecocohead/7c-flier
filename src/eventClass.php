<?php
class Event {
    private $id;
    private $image;
    private $startDate;
    //setters
    public function setID($newId) {
        $this->id = $newId;
    }
    public function setImage($newImage) {
        $this->image = $newImage;
    }
    public function setStartDate($newStartDate) {
        $this->startDate = $newStartDate;
    }
    //getters
    public function getID() {
        return $id;
    }
    public function getImage() {
        return $image;
    }
    public function getStartDate() {
        return $startDate;
    }

    //functions
    public function publishChanges($username, $password, $endPoint) {
        $newData = [
            "image" => $image
        ];
        callAPI("POST", $endPoint/$id, $newData, $username, $password);
    }
}
?>