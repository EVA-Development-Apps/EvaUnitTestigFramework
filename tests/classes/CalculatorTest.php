<?php declare(strict_types=1);

//require_once('bootstrap.php'); - we don't need this as we are define this in phpunit.xml

/**
 * @testdox CalculatorTest
 */
class CalculatorTest extends EvaUnitBase
{

    /**
    * @test
    */
	public function JeremyDivide()
	{
		$myCalculator = new Calculator(10);
		$result = $myCalculator->divide(2);

		$this->assertEquals(5, $result);
	}

   /**
     * @testdox testDivideWithException Divide of zero
     */
    public function testDivideWithException()
    {
        $myCalculator = new Calculator(10);
        $result = $myCalculator->divide(0);
        $this->assertEquals(5, $result);
    }

     public function testOne(): void
     {
         fwrite(STDOUT, __METHOD__ . "\n");
         $this->assertTrue(true);
     }
 
     public function testTwo(): void
     {
         fwrite(STDOUT, __METHOD__ . "\n");
         $this->assertTrue(false);
     }
}