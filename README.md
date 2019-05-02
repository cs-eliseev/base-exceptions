English | [Русский](https://github.com/cs-eliseev/base-exceptions/blob/master/README.ru_RU.md)

EXCEPTIONS CSE BASE
=======

[![Travis (.org)](https://img.shields.io/travis/cs-eliseev/base-exceptions.svg?style=flat-square)](https://travis-ci.org/cs-eliseev/base-exceptions)
[![Codecov](https://img.shields.io/codecov/c/github/cs-eliseev/base-exceptions.svg?style=flat-square)](https://codecov.io/gh/cs-eliseev/base-exceptions)
[![Scrutinizer code quality](https://img.shields.io/scrutinizer/g/cs-eliseev/base-exceptions.svg?style=flat-square)](https://scrutinizer-ci.com/g/cs-eliseev/base-exceptions/?branch=master)

[![Packagist](https://img.shields.io/packagist/v/cse/base-exceptions.svg?style=flat-square)](https://packagist.org/packages/cse/base-exceptions)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.1-8892BF.svg?style=flat-square)](https://packagist.org/packages/cse/base-exceptions)
[![Packagist](https://img.shields.io/packagist/l/cse/base-exceptions.svg?style=popout-square)](https://github.com/cs-eliseev/base-exceptions/blob/master/LICENSE.md)
[![GitHub repo size](https://img.shields.io/github/repo-size/cs-eliseev/base-exceptions.svg?style=flat-square)](https://github.com/cs-eliseev/base-exceptions/archive/master.zip)

This library provides a simple work with exceptions for both development and production.

Project repository: https://github.com/cs-eliseev/base-exceptions

**DEMO**
```php
try {
    ..
    $code = 0;
} catch (CseExceptions $e) {
    ...
} catch (Throwable $e) {
    $code = $e->getCode();
}
CseExceptions::getErrorMsg($code);
// Unknown error
```

***


## Introduction

CSE BASE is a set of libraries written in PHP specifically to extend your classes.

A set of basic methods for creating your classes is what you need to quickly create web applications. 
EXCEPTIONS CSE BASE, allows you to extend classes with exceptions.

CSE BASE was created for the rapid development of web applications.

**CSE Base project:**
* [Exceptions CSE base](https://github.com/cs-eliseev/base-exceptions)

Below you will find some information on how to init library and perform common commands.


## Install

You can find the most recent version of this project [here](https://github.com/cs-eliseev/base-exceptions).

### Composer

Execute the following command to get the latest version of the package:
```bash
composer require cse/base-exceptions
```

Or file composer.json should include the following contents:
```json
{
    "require": {
        "cse/base-exceptions": "*"
    }
}
```

### Git

Clone this repository locally:
```bash
git clone https://github.com/cs-eliseev/base-exceptions.git
```

### Download

[Download the latest release here](https://github.com/cs-eliseev/base-exceptions/archive/master.zip).


## Usage

View test model: [ModelExceptions.php](https://github.com/cs-eliseev/base-exceptions/blob/master/tests-data/ModelExceptions.php)

See examples: [examples-exceptions.php](https://github.com/cs-eliseev/base-exceptions/blob/master/examples/examples-exceptions.php)

**Create Model Exception**

Examples:
```php
class ModelExceptions extends CseExceptions
{
    const ERROR_EXAMPLE_CODE_1 = 1;
    const ERROR_EXAMPLE_CODE_2 = 2;
    const ERROR_EXAMPLE_CODE_3 = 3;

    /**
     * @var array
     */
    protected static $errorsMsg = [
        self::ERROR_EXAMPLE_CODE_1 => 'Error code 1',
        self::ERROR_EXAMPLE_CODE_2 => 'Error code 2',
        self::ERROR_EXAMPLE_CODE_3 => 'Error code 3',
    ];
}
```

**Use check instance**

Examples:
```php
try {
    ...
    throw new ModelExceptions('CseExceptions');
} catch (CseExceptions $e) {
    $e->getMessage();
    // CseExceptions
} catch (Exception $e) {
    // Last Exception
} catch (Throwable $e) {
    // Last Throwable
}
```

**Throw exception by code error**

Examples:
```php
ModelExceptions::throwException(ModelExceptions::ERROR_EXAMPLE_CODE_1);
// Error code 1
```

Add msg to exception:
```php
ModelExceptions::throwException(ModelExceptions::ERROR_EXAMPLE_CODE_2, ' - msg test');
// Error code 2 - msg test
```

Default error msg:
```php
ModelExceptions::throwException(4);
// Unknown error
```

**Get error msg by code error**

Examples:
```php
ModelExceptions::getErrorMsg(ModelExceptions::ERROR_EXAMPLE_CODE_3);
// Error code 3
```

Default error msg:
```php
ModelExceptions::getErrorMsg(4);
// Unknown error
```


## Testing & Code Coverage

PHPUnit is used for unit testing. Unit tests ensure that class and methods does exactly what it is meant to do.

General PHPUnit documentation can be found at https://phpunit.de/documentation.html.

To run the PHPUnit unit tests, execute:
```bash
phpunit PATH/TO/PROJECT/tests/
```

If you want code coverage reports, use the following:
```bash
phpunit --coverage-html ./report PATH/TO/PROJECT/tests/
```

Used PHPUnit default config:
```bash
phpunit --configuration PATH/TO/PROJECT/phpunit.xml
```


## Donating

You can support this project [here](https://www.paypal.me/cseliseev/10usd). 
You can also help out by contributing to the project, or reporting bugs. 
Even voicing your suggestions for features is great. Anything to help is much appreciated.


## License

The EXCEPTIONS CSE BASE is open-source PHP library licensed under the MIT license. Please see [License File](https://github.com/cs-eliseev/base-exceptions/blob/master/LICENSE.md) for more information.

***

> GitHub [@cs-eliseev](https://github.com/cs-eliseev)