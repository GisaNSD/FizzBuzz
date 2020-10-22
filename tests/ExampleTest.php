<?php

namespace Tests;

use  PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class ExampleTest extends TestCase {

	public function test_Fizz_3_Multiple() {
		
		$fizzBuzz = new FizzBuzz();
		
		$result = $fizzBuzz->number(3);

		$this->assertEquals("Fizz", $result);
	}

	public function test_Buzz_5_Multiple() {
		
		$fizzBuzz = new FizzBuzz();
		
		$result = $fizzBuzz ->number(5);
		
		$this->assertEquals("Buzz",$result);
	}

	public function test_FizzBuzz_3_5_Multiple() {
		
		$fizzBuzz = new FizzBuzz();
		
		$result = $fizzBuzz ->number(15);
		
		$this->assertEquals("FizzBuzz",$result);
	}

}


