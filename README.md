[![Latest Stable Version](https://poser.pugx.org/3f/tool-bag/v/stable.png)](https://packagist.org/packages/3f/tool-bag)
[![Latest Unstable Version](https://poser.pugx.org/3f/tool-bag/v/unstable.png)](https://packagist.org/packages/3f/tool-bag)
[![Build Status](https://scrutinizer-ci.com/g/dedalozzo/tool-bag/badges/build.png?b=master)](https://scrutinizer-ci.com/g/dedalozzo/tool-bag/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/dedalozzo/tool-bag/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/dedalozzo/tool-bag/?branch=master)
[![License](https://poser.pugx.org/3f/tool-bag/license.svg)](https://packagist.org/packages/3f/tool-bag)
[![Total Downloads](https://poser.pugx.org/3f/tool-bag/downloads.png)](https://packagist.org/packages/3f/tool-bag)


ToolBag
========
A bunch of idempotent static functions organised into categories to be reused in multiple projects.


Composer Installation
---------------------

To install ToolBag, you first need to install [Composer](http://getcomposer.org/), a Package Manager for
PHP, following these few [steps](http://getcomposer.org/doc/00-intro.md#installation-nix):

```sh
curl -s https://getcomposer.org/installer | php
```

You can run this command to easily access composer from anywhere on your system:

```sh
sudo mv composer.phar /usr/local/bin/composer
```


ToolBag Installation
--------------------
Once you have installed Composer, it's easy install ToolBag.

1. Edit your `composer.json` file, adding ToolBag to the require section:
```sh
{
    "require": {
        "3f/tool-bag": "dev-master"
    },
}
```
2. Run the following command in your project root dir:
```sh
composer update
```

Usage
-----
The tool bag provides four different helpers:
 
- `ArrayHelper` -> common array methods
- `ClassHelper` -> routines to handle classes
- `TextHelper` -> routines to process strings
- `TimeHelper` -> routines to handle and manipulate time


All the methods are static, so you don't need to create an class instance to use them.

```php
if (ArrayHelper::isAssociative([1, 2, 3]))
  echo "It's an associative array.";
else
  echo "It's not associative array.";
```

Methods
-------

#### ArrayHelper

| Method | Description |
| --- | --- |
| `isAssociative()` | Checks if the array is associative. |
| `toObject()` | Converts the array to an object. |
| `fromJson()` | Converts the given JSON into an array. |
| `slice()` | Returns a portion of the array. |
| `value()` | Given a key, returns its related value. |
| `key()` | Given a key, returns it only if exists otherwise return `false`. |
| `unversion()` | Modifies the specified array, depriving each ID of its related version. |
| `merge()` | Merge the two given arrays. The returned array doesn't contain duplicate values. |
| `multidimensionalUnique()` | Like `array_unique()`, removes duplicate values, but works on multidimensional arrays. |

#### ClassHelper

| Method | Description |
| --- | --- |
| `getClass()` | Given a class path, returns the class name even included its namespace. |
| `getClassName()` | Given a class within its namespace, it returns the class name pruned by its namespace. |
| `getClassRoot()` | Given a namespace, it returns the namespace itself pruned by its last part. |

#### TextHelper

| Method | Description |
| --- | --- |
| `convertCharset()` | Converts a string from a charset to another one. |
| `truncate()` | Cuts a string to a given number of characters without breaking words. |
| `capitalize()` | Capitalizes the given string. |
| `purge()` | Removes the content of pre tags, than strip all tags. |
| `stick()` | Generates a single word, stripping every `-` from a compound word. |
| `substrings()` | Given a string, returns all the unique contained substrings. |
| `slug()` | Generates a slug from the provided string. |
| `buildUrl()` | Builds the post url, given its publishing or creation date and its slug. |
| `replaceAllButFirst()` | Replaces all the occurrences but first. |
| `unversion()` | Prunes the ID of its version number, if any. |
| `formatNumber()` | Formats the number replacing the thousand separator with the decimal point. |
| `splitFullName()` | Separates the given full name into first name and last name. |
| `sanitize()` | Removes unwanted MS Word smart characters from a string. |

#### TimeHelper

| Method | Description |
| --- | --- |
| `since()` | Returns an associative array with the elapsed time, from the provided timestamp, in days, hours, minutes and seconds. |
| `period()` | Checks if the provided string represents a period of time and returns it if exists otherwise returns `false`. |
| `when()` | Returns a measure of the time passed since the provided timestamp. In case is passed more than a day, returns a human readable date. |
| `aWhileBack` | Given a constant representing a period, returns a formatted string. |
| `minMaxInPeriod()` | Given a constant representing a period, returns a range of timestamps (minimum and maximum) for that period. |
| `dateLimits()` | Given a period of time (an year, a month or a day), calculates the date limits for that period. |


Documentation
-------------
The documentation can be generated using [Doxygen](http://doxygen.org). A `Doxyfile` is provided for your convenience.


Authors
-------
Filippo F. Fadda - <filippo.fadda@programmazione.it> - <http://www.linkedin.com/in/filippofadda>


Copyright
---------
Copyright (c) 2016-2017, Filippo Fadda
All rights reserved.


License
-------
ToolBag is licensed under the Apache License, Version 2.0 - see the LICENSE file for details.