[![Latest Stable Version](https://poser.pugx.org/3f/tool-bag/v/stable.png)](https://packagist.org/packages/3f/tool-bag)
[![Latest Unstable Version](https://poser.pugx.org/3f/tool-bag/v/unstable.png)](https://packagist.org/packages/3f/tool-bag)
[![Build Status](https://scrutinizer-ci.com/g/dedalozzo/tool-bag/badges/build.png?b=master)](https://scrutinizer-ci.com/g/dedalozzo/tool-bag/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/dedalozzo/tool-bag/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/dedalozzo/tool-bag/?branch=master)
[![License](https://poser.pugx.org/3f/tool-bag/license.svg)](https://packagist.org/packages/3f/converter)
[![Total Downloads](https://poser.pugx.org/3f/tool-bag/downloads.png)](https://packagist.org/packages/3f/converter)


ToolBag
========
An object oriented access control system.


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