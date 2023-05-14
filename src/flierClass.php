<?php
class Flier {
    private $url;
    private $name;

    //setters
    public function setURL($newUrl) {
        $this->url = $newUrl;
    }
    public function setName($newName) {
        $this->name = $newName;
    }

    //getters
    public function getURL() {
        return $this->url;
    }
    public function getName() {
        return $this->name;
    }
}
?>