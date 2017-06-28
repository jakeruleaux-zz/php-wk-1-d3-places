<?php
    class Places
    {
        private $city;

        function __construct($new_city)
        {
            $this->city = $new_city;
        }
        function setCity($new_city)
        {
            $this->city = (string) $new_city;
        }
        function getCity()
        {
            return $this->city;
        }

        function save()
        {
            array_push($_SESSION['list_of_cities'], $this);
        }
        static function getAll()
        {
            return $_SESSION['list_of_cities'];
        }
        static function deleteAll()
        {
            $_SESSION['list_of_cities'] = array();
        }
    }
?>
