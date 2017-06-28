<?php
    class Places
    {
        private $city;
        private $length;
        private $people;

        function __construct($new_city, $new_length, $new_people)
        {
            $this->city = $new_city;
            $this->length = $new_length;
            $this->people = $new_people;
        }
        function setCity($new_city)
        {
            $this->city = (string) $new_city;
        }
        function getCity()
        {
            return $this->city;
        }

        function setLength($new_length)
        {
            $this->length = (string) $new_length;
        }
        function getLength()
        {
            return $this->length;
        }

        function setPeople($new_people)
        {
            $this->people = (string) $new_people;
        }
        function getPeople()
        {
            return $this->people;
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
