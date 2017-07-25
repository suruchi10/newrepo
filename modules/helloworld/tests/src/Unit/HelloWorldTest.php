<?php
namespace Drupal\Tests\helloworld\Unit;
use Drupal\Tests\UnitTestCase;

/**
   * @coversDefaultClass \Drupal\helloworld\HelloWorldClass
   * @group Hello_world
   * Modules to enable.
   *  @var array
   */
 class HelloWorldTest extends UnitTestCase {
 
  /**
   * @var \Drupal\test_example\HelloWorldTest
   */
  public $conversionService;
 
  public function setUp() {
    $this->conversionService = new \Drupal\helloworld\HelloWorldClass();
  }
 
  /**
   * A simple test that tests our celsiusToFahrenheit() function.
   */
  public function testOneConversion() {
    // Confirm that 0C = 32F.
    $this->assertEquals(32, $this->conversionService->celsiusToFahrenheit(0));
  }
  public function testTwoConversion() {
    // Confirm that 45C = 113F.
    $this->assertEquals(113, $this->conversionService->celsiusToFahrenheit(45));
  }
  public function testThreeConversion() {
    // Confirm that 45C = 113F.(Failure)
    $this->assertEquals(80, $this->conversionService->celsiusToFahrenheit(45));
  }
 
 
}