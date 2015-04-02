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
        protected $primaryKey = 'gme_id';
        
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
    }