<?php
 
/**
 * @file
 * Contains \Drupal\helloworld\HelloWorldClass.
 */
 
namespace Drupal\helloworld;
 
/**
 * Provide functions for converting measurements.
 *
 * @package Drupal\helloworld
 */
class HelloWorldClass {
 
  /**
   * Convert Celsius to Fahrenheit
   *
   * @param $temp
   *
   * @return int
   */
 public function celsiusToFahrenheit($temp) {
    return ($temp * (9/5)) + 32;
  }
}