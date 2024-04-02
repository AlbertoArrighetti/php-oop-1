<?php
/**
 * Director infos
 */
class Director {
    public $name;
    public $surname;
    public $nationality;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  string $_surname
     * @param  string $_nationality
     */
    function __construct($_name, $_surname, $_nationality) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->nationality = $_nationality;
    }


    // stringa completa del regista 
    public function getFullDirector() {
        return $this->name . ' ' . $this->surname . ', ' . $this->nationality;
    }
}