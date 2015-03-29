<?php

/**
 * class for link.
 * This class can refer you to page
 * autor: Lukáš Kotyk
 * version 0.0.1
 * 
 */
class odkaz {

    /**
     * set properties
     * @var type 
     */
    public $url;
    public $title;
    public $text;
    public $id;
    public $type;
    public $center;

    /**
     * function construct
     */
    public function __construct() {
        $this->url = "";
        $this->title = "";
        $this->text = "";
        $this->id = "";
        $this->type = "";
        $this->center = "";
    }

    /**
     * 
     * @param type $url
     */
    public function seturl($url) {
        $this->url = $url;
    }

    /**
     * 
     * @param type $title
     */
    public function settitle($title) {
        $this->title = $title;
    }

    /**
     * 
     * @param type $text
     */
    public function settext($text) {
        $this->text = $text;
    }

    /**
     * 
     * @param type $id
     */
    public function setid($id) {
        $this->id = $id;
    }

    /**
     * 
     * @param type $type
     */
    public function settype($type) {
        $this->type = $type;
    }

    /**
     *  function for center link
     */
    public function setcenter() {
        $this->center = "center";
    }

    /**
     * Conditions for link display
     * @return string
     */
    public function __toString() {
        $d = "";
        if ($this->center === "center") {
            $d = $d . '<center>';
        }
        $d = $d . '<a href="' . $this->url . '" ';
        if ($this->title !== "") {
            $d = $d . 'title="' . $this->title . '" ';
        }
        if ($this->type !== "" and $this->id !== "") {
            $d = $d . '' . $this->type . '="' . $this->id . '"';
        }
        $d = $d . '>' . $this->text;
        $d = $d . '</a>';
        if ($this->center === "center") {
            $d = $d . '</center>';
        }
        return $d;
    }

}
