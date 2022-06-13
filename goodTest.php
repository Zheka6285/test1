<?php
    use PHPUnit\Framework\TestCase;
    require 'Student.php';
    class GoodTest extends TestCase{
        public $GoodTestInstance;
        public $gr;
        public function testGroup(){
            $this->GoodTestInstance=new Students();
            $this->gr=309;
            $this->GoodTestInstance->set_group($this->gr);
            $this->assertEquals($this->gr, $this->GoodTestInstance->get_group());
        }
    }