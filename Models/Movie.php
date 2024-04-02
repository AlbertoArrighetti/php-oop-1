<?php
/**
 * Class for a single movie
 */
class Movie {
    // attributes
    public $title;
    public $description;
    public $language;
    public $underage;

    public $genres;
    public $director;

    /**
     * __construct
     *
     * @param  string $_title
     * @param  boolean $_underage
     * @param  string $_language
     * @param  array $_genres
     */
    function __construct($_title, $_underage, $_language, array $_genres, Director $_director)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->underage = $_underage;

        $this->genres = $_genres;
        $this->director = $_director;
    }

    // metodo
    public function isUnderAge() {
        if ($this->underage) {
            return 'Questo film non è adatto ai minori di 18 anni';
        } else {
            return 'Questo film è adatto ai minori di 18 anni';
        }
    }
}