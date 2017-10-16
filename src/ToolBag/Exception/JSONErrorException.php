<?php

/**
 * @file JSONErrorException.php
 * @brief This file contains the JSONErrorException class.
 * @details
 * @author Filippo F. Fadda
 */


//! The errors namespace
namespace ToolBag\Exception;


/**
 * @brief Exception thrown when unable to parse JSON.
 */
class JSONErrorException extends \RuntimeException {}