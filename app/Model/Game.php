<?php

    namespace App\Model;
    
    use Illuminate\Database\Eloquent\Model;
    
    /**
     * Game Class to represent data within the database.
     */
    class Game extends Model {
        /**
         * @var string Database connection name
         */
        protected $connection='myDB';
        
        /**
         * @var string Table name within the Database 
         */
        protected $table = 'Game';
        
        /**
         * @var string Primary key of the table.
         */
        protected $primaryKey = 'gme_title';
        
        /**
         * Returns the location of the image for the Game object.
         * 
         * @return string
         */
        public function getImageAttribute() {
            return $this->gme_image;
        }
        
        /**
         * Returns the Title of the Game object.
         * 
         * @return string
         */
        public function getTitleAttribute() {
            return $this->gme_title;
        }
        
        /**
         * Returns the Developer of the Game object.
         * 
         * @return string
         */
        public function getDeveloperAttribute() {
            return $this->gme_developer;
        }
        
        /**
         * Returns the Console of the Game object.
         * 
         * @return string
         */
        public function getConsoleAttribute() {
            return $this->gme_console;
        }
        
        /**
         * Returns the Price of the Game object.
         * 
         * @return string
         */
        public function getPriceAttribute() {
            return $this->gme_price;
        }
        
        /**
         * Returns the Rating of the Game object.
         * 
         * @return string
         */
        public function getRatingAttribute() {
            return $this->gme_rating;
        }
        
        /**
         * Returns the Comments of the Game object.
         * 
         * @return string
         */
        public function getCommentsAttribute() {
            return $this->gme_comments;
        }
        
        /**
         * Set game title.
         * 
         * @param string $title
         */
        public function setTitle($title) {
            $this->gme_title = $title;
        }
        
        /**
         * Set game developer
         * 
         * @param string $developer
         */
        public function setDeveloper($developer) {
            $this->gme_developer = $developer;
        }
        
        /**
         * Set game console
         * 
         * @param string $console
         */
        public function setConsole($console) {
            $this->gme_console = $console;
        }
        
        /**
         * Set the game price
         * 
         * @param float $price
         */
        public function setPrice($price) {
            $this->gme_price = (float)$price;
        }
        
        /**
         * Set game rating
         * 
         * @param string $rating
         */
        public function setRating($rating) {
            $this->gme_rating = $rating;
        }
        
        /**
         * Set game comments
         * 
         * @param string $comments
         */
        public function setComments($comments) {
            $this->gme_comments = $comments;
        }
    }