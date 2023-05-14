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
        return $this->id;
    }
    public function getImage() {
        return $this->image;
    }
    public function getStartDate() {
        return $this->startDate;
    }

    //functions
    public function publishChanges($username, $password, $endPoint) {
        $newData = [
            "image" => $this->image
        ];
        callAPI("POST", $endPoint . "/" . $this->id, $newData, $username, $password);
    }
}
?>