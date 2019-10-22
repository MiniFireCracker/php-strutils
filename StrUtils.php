<?php

    class StrUtils{

        private $_str;

        public function __construct($_str)
        {
            $this->_str = $_str;
        }

        public function bold()
        {

            echo "<strong>" . $this->_str . "</strong> <br>";
        }

        public function italic()
        {
            echo "<em>" . $this->_str . "</em> <br>";
        }

        public function underline()
        {
            echo "<u>". $this->_str ."</u><br>"; 
        }

        public function capitalize()
        {
            echo strtoupper($this->_str) .'<br>';
        }

        public function uglify()
        {
           // echo '(' . $this->_str . ')'->bold()
            return $this->_str->bold()
                                ->italic()
                                ->underline()
                                ->capitalize();
        }

    }