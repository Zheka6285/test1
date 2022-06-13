<?php
    use PHPUnit\Framework\TestCase;
    require 'Student.php';
    class BadTest extends TestCase{
        public $BadTestInstance;
        public $age;
        public function testAge(){
            $this->BadTestInstance=new Students();
            $this->age=21;
            $this->BadTestInstance->set_age($this->age);
            $this->assertEquals($this->age, $this->BadTestInstance->get_age());
        }
    }