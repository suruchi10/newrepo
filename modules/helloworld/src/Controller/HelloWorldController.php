<?php
/**
*Contains \Drupal\my_module\Controller\MyModuleController.
*/
namespace Drupal\helloworld\Controller;
use Drupal\Core\Controller\ControllerBase;

class HelloWorldController extends ControllerBase {
	/**
	* Generates an example page
	*/
	public function test() {
      return array(
      	'#type' => 'markup',
      	'#markup' => $this->t('Hello World!!!'),
      );
	}
}
