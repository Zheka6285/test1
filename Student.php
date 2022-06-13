<?php
    class Students{
        private $group;
        private $age;
        public function get_group(){
            return $this->group;
        }
        public function set_group($gr){
            $this->group=$gr;
        }
        public function get_age(){
            return $this->age;
        }
        public function set_age($age_s){
            $this->group=$age_s+2;
        }
    }