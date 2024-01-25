<?php
    
    class Movie {
        public $italianTitle;
        public $originalTitle;
        public $genre;
        public $duration;
        public $director;

        public function __construct($italianTitle, $originalTitle, $genre, $duration, $director) {
            $this->italianTitle = $italianTitle;
            $this->originalTitle = $originalTitle;
            $this->genre = $genre;
            $this->duration = $duration;
            $this->director = $director;
        }   

        // Metodo per ottenere il titolo tradotto del film
        public function getItalianTitle() {
        return $this->italianTitle;
        }
        // Metodo per ottenere il titolo originale del film
        public function getOriginalTitle() {
            return $this->originalTitle;
        }
         // Metodo per ottenere il genere del film
         public function getGenreMovie() {
            return $this->genre;
        }
         // Metodo per ottenere la durata del film
         public function getDurationMovie() {
            return $this->duration;
        }
        // Metodo per ottenere il regista del film
        public function getDirectorOfTheMovie() {
            return $this->director;
        }
    }
?>
