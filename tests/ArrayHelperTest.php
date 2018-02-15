<?php

/**
 * @file ArrayHelperTest.php
 * @brief This file contains the ${CLASS_NAME} class.
 * @details
 * @author Filippo F. Fadda
 */


use ToolBag\Helper\ArrayHelper;

class ArrayHelperTest extends PHPUnit_Framework_TestCase {

  public function testUnversion() {

  }

  public function testToObject() {

  }

  public function testKey() {

  }

  public function testFromJson() {

  }

  public function testMerge() {

  }

  public function testValue() {

  }

  public function testMultidimensionalUnique() {

  }

  public function testSlice() {

  }


  public function testIsAssociative() {
    $assocArray = [
      'one' => 1,
      'two' => 2,
      'three' => 3,
    ];

    $this->assertTrue(ArrayHelper::isAssociative($assocArray));
  }


  public function testIsNotAssociative() {
    $this->assertFalse(ArrayHelper::isAssociative([1, 2, 3]));
  }

}
