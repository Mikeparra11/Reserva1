<?php

require_once 'simpletest/autorun.php';
require_once 'funcion.php';

    class TestSi extends UnitTestCase
    {
    	var $al;

    	function setUp() {
    		$this->al = new Alumno();
    	}

    	function testCalcAge()
    	{
    		$result = $this->al->pro('1024', 'mike', 'parra', '12/02/2017');
    		$this->assertEqual(true, $result);
    	}

    }
?>
