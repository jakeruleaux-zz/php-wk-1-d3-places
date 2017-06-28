<?php
    class Places
    {
        private $city;

        function __construct($city)
        {
            $this->city = $city
        }
        function getCity()
        {
            return $this->city;
        }
        function setCity()
        {
            $this->city;
        }
    }
?>
