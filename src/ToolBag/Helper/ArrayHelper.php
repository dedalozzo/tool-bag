<?php

/**
 * @file ArrayHelper.php
 * @brief This file contains the ArrayHelper class.
 * @details
 * @author Filippo F. Fadda
 */


namespace ToolBag\Helper;


use ToolBag\Exception\JSONErrorException;


/**
 * @brief Helper with common array methods.
 * @nosubgrouping
 */
class ArrayHelper {


  /**
   * @brief Checks if the array is associative.
   * @param[in] array $array The array.
   * @retval bool
   */
  public static function isAssociative(array $array) {
    return (0 !== count(array_diff_key($array, array_keys(array_keys($array)))) || count($array) == 0);
  }


  /**
   * @brief Converts the array to an object.
   * @param[in] array $array The array to be converted.
   * @retval object
   */
  public static function toObject(array $array) {
    return is_array($array) ? (object)array_map(__METHOD__, $array) : $array;
  }


  /**
   * @brief Converts the given JSON into an array.
   * @param[in] string $json A JSON object.
   * @param[in] bool $assoc When `true`, returned objects will be converted into associative arrays.
   * @retval array
   */
  public static function fromJson($json, $assoc) {
    $data = json_decode((string)$json, $assoc);

    if (is_null($data))
      switch (json_last_error()) {
        case JSON_ERROR_DEPTH:
          throw new JSONErrorException("Unable to parse the given JSON, the maximum stack depth has been exceeded.");
          break;
        case JSON_ERROR_STATE_MISMATCH:
          throw new JSONErrorException("Unable to parse the given JSON, invalid or malformed JSON.");
          break;
        case JSON_ERROR_CTRL_CHAR:
          throw new JSONErrorException("Unable to parse the given JSON, control character error, possibly incorrectly encoded.");
          break;
        case JSON_ERROR_SYNTAX:
          throw new JSONErrorException("Unable to parse the given JSON, syntax error.");
          break;
        case JSON_ERROR_UTF8:
          throw new JSONErrorException("Unable to parse the given JSON, malformed UTF-8 characters, possibly incorrectly encoded.");
          break;
      }

    return $data;
  }


  /**
   * @brief Returns a portion of the array.
   * @param[in] array $array The original array.
   * @param[in] int $number (optional) The number of elements from left to right.
   * @retval array
   */
  public static function slice(array $array, $number = NULL) {
    return array_slice($array, 0, $number, TRUE);
  }


  /**
   * @brief Given a key, returns its related value.
   * @param[in] mixed $key A key.
   * @param[in] array $array The array to be searched.
   * @retval int,bool The value or `false` in case the value doesn't exist.
   */
  public static function value($key, array $array) {

    if (array_key_exists($key, $array))
      return $array[$key];
    else
      return FALSE;
  }


  /**
   * @brief Given a key, returns it only if exists otherwise return `false`.
   * @param[in] mixed $key A key.
   * @param[in] array $array The array to be searched.
   * @retval mixed,bool The key or `false` in case the key doesn't exist.
   */
  public static function key($key, array $array) {

    if (array_key_exists($key, $array))
      return $key;
    else
      return FALSE;
  }


  /**
   * @brief Modifies the specified array, depriving each ID of its related version.
   * @param[in,out] array $ids An array of IDs.
   */
  public static function unversion(array &$ids) {
    array_walk($ids, function(&$value, $key) {
        $value = strtok($value, TextHelper::SEPARATOR);
      }
    );
  }


  /**
   * @brief Merge the two given arrays.
   * @details The returned array doesn't contain duplicate values.
   * @param[in] array $array1 The first array.
   * @param[in] array $array2 The first array.
   * @retval array
   */
  public static function merge(array $array1, array $array2) {
    $array = array_merge($array1, $array2);
    return array_keys(array_flip($array));
  }

} 