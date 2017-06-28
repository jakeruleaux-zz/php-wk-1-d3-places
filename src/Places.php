<?php
    class Places
    {
        private $city;

        function __construct($city)
        {
            $this->city = $city;
        }
        function getCity()
        {
            return $this->city;
        }
        function setCity()
        {
            $this->city;
        }

        function save()
        {
            array_push($_SESSION['cities'], $this);
        }
        static function getAll()
        {
            return $_SESSION['cities'];
        }
        static function deleteAll()
        {
            $_SESSION['cities'] = array();
        }
    }
?>
