<?php
namespace Drupal\Tests\resume\Functional;
use Drupal\Tests\BrowserTestBase;

/**
   * @coversDefaultClass \Drupal\resume\Form\ResumeForm
   * @group RESUME
   * Modules to enable.
   *  @var array
   */


class ResumeFormTest extends BrowserTestBase {

  /**
   * Modules to install.
   * @var array
   */
  public static $modules = ['node','resume'];


   public function setUp() {
    parent::setUp();

  }
  /**
   * Tests that 'resume/myform' returns a 200 OK response.
   */
  public function testResumRouterURLIsAccessible() {
    $this->drupalGet('/resume/myform');
    $this->assertResponse(200);
  }



  
}