<?php

/**
 * @file MetaClass.php
 * @brief This file contains the MetaClass abstract class.
 * @details
 * @author Filippo F. Fadda
 */


//! Meta classes
namespace ToolBag\Meta;


use ToolBag\Extension\TProperty;
use ToolBag\Helper\ArrayHelper;
use ToolBag\Exception\JSONErrorException;


/**
 * @brief This abstract class provides a set of methods to store and access metadata.
 * @details Metadata are accessible through properties defined by the subclass that extends the `MetaClass` itself.
 * In fact, the class is using the `TProperty` extension.
 * @nosubgrouping
 */
abstract class MetaClass {
  use TProperty;

  protected $meta = [];


  public function __construct() {
  }


  public function getMetadata($name) {
    return @$this->meta[$name];
  }


  public function isMetadataPresent($name) {
    return (array_key_exists($name, $this->meta)) ? TRUE : FALSE;
  }


  public function setMetadata($name, $value, $override = TRUE, $allowNull = TRUE) {
    if (is_null($value) && !$allowNull)
      return;

    if ($this->isMetadataPresent($name) && !$override)
      return;

    $this->meta[$name] = $value;
  }


  public function unsetMetadata($name) {
    if (array_key_exists($name, $this->meta))
      unset($this->meta[$name]);
  }


  public function assignJson($json) {
    $this->meta = array_merge($this->meta, ArrayHelper::fromJson($json, TRUE));
  }


  public function assignArray(array $array) {
    if (ArrayHelper::isAssociative($array)) {
      $this->meta = array_merge($this->meta, $array);
    }
    else
      throw new \InvalidArgumentException("\$array must be an associative array.");
  }


  public function assignObject(\stdClass $object) {
    $this->meta = array_merge($this->meta, get_object_vars($object));
  }


  /**
   * @brief Returns the document representation as a JSON object.
   * @retval JSON object
   */
  public function asJson() {
    $json = json_encode($this->meta,
      JSON_UNESCAPED_UNICODE |
      JSON_PARTIAL_OUTPUT_ON_ERROR |
      JSON_PRESERVE_ZERO_FRACTION
    );

    if ($json === FALSE)
      throw new JSONErrorException(json_last_error_msg());

    return $json;
  }


  /**
   * @brief Returns the document representation as an associative array.
   * @retval array An associative array
   */
  public function asArray() {
    return $this->meta;
  }

}