[English](https://github.com/cs-eliseev/base-exceptions/blob/master/README.md) | Русский

EXCEPTIONS CSE BASE
=======

[![Travis (.org)](https://img.shields.io/travis/cs-eliseev/base-exceptions.svg?style=flat-square)](https://travis-ci.org/cs-eliseev/base-exceptions)
[![Codecov](https://img.shields.io/codecov/c/github/cs-eliseev/base-exceptions.svg?style=flat-square)](https://codecov.io/gh/cs-eliseev/base-exceptions)
[![Scrutinizer code quality](https://img.shields.io/scrutinizer/g/cs-eliseev/base-exceptions.svg?style=flat-square)](https://scrutinizer-ci.com/g/cs-eliseev/base-exceptions/?branch=master)

[![Packagist](https://img.shields.io/packagist/v/cse/base-exceptions.svg?style=flat-square)](https://packagist.org/packages/cse/base-exceptions)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.1-8892BF.svg?style=flat-square)](https://packagist.org/packages/cse/base-exceptions)
[![Packagist](https://img.shields.io/packagist/l/cse/base-exceptions.svg?style=flat-square)](https://github.com/cs-eliseev/base-exceptions/blob/master/LICENSE.md)
[![GitHub repo size](https://img.shields.io/github/repo-size/cs-eliseev/base-exceptions.svg?style=flat-square)](https://github.com/cs-eliseev/base-exceptions/archive/master.zip)

Данная библиотек обеспечивает простую работу с исключениями как для разработки так и для производства. 

Репозиторий проекта: https://github.com/cs-eliseev/base-exceptions

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


## Описание проекта

CSE BASE - это набор библиотек написанных на PHP специально для расширения ваших классов.

Набор базовых методов для строительства ваших классов, это то что вам необходимо для быстрого создание Web приложений. 
EXCEPTIONS CSE BASE, позволяет вам расширять классы с исклчениями.

CSE BASE создан для быстрой разработки веб-приложений.

**Список библиотек CSE Base:**
* [Exceptions CSE base](https://github.com/cs-eliseev/base-exceptions)

Ниже представлена информация об установке и перечне команд с примерами их использования.


## Установка

Самая последняя версия проекта доступна [здесь](https://github.com/cs-eliseev/base-exceptions).

### Composer

Чтобы установить последнюю версию проекта, выполните следующую команду в терминале:
```shell
composer require cse/base-exceptions
```

Или добавьте следующее содержимое в файл composer.json:
```json
{
    "require": {
        "cse/base-exceptions": "*"
    }
}
```

### Git

Добавить этот репозиторий локально можно следующим образом:
```shell
git clone https://github.com/cs-eliseev/base-exceptions.git
```

### Скачать

[Скачать последнюю версию проекта можно здесь](https://github.com/cs-eliseev/base-exceptions/archive/master.zip).


## Использование


Посмотреть тестовую модель: [ModelExceptions.php](https://github.com/cs-eliseev/base-exceptions/blob/master/tests-data/ModelExceptions.php)

Посмотреть примеры: [examples-exceptions.php](https://github.com/cs-eliseev/base-exceptions/blob/master/examples/examples-exceptions.php)

**Создание модели для исключения**

Пример:
```php
class ModelExceptions extends CseExceptions
{
    const ERROR_EXAMPLE_CODE_1 = 1;
    const ERROR_EXAMPLE_CODE_2 = 2;
    const ERROR_EXAMPLE_CODE_3 = 3;

    protected static $errorsMsg = [
        self::ERROR_EXAMPLE_CODE_1 => 'Error code 1',
        self::ERROR_EXAMPLE_CODE_2 => 'Error code 2',
        self::ERROR_EXAMPLE_CODE_3 => 'Error code 3',
    ];
}
```

**Проверка типов объекта исключение**

Пример:
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

**Вызвать исключение по коду ошибки**

Пример:
```php
ModelExceptions::throwException(ModelExceptions::ERROR_EXAMPLE_CODE_1);
// Error code 1
```

Добавить сообщение к исключению:
```php
ModelExceptions::throwException(ModelExceptions::ERROR_EXAMPLE_CODE_2, ' - msg test');
// Error code 2 - msg test
```

Сообщение об ошибке по умолчанию:
```php
ModelExceptions::throwException(4);
// Unknown error
```

**Получить сообщение об ошибке по ее коду**

Пример:
```php
ModelExceptions::getErrorMsg(ModelExceptions::ERROR_EXAMPLE_CODE_3);
// Error code 3
```

Сообщение об ошибке по умолчанию:
```php
ModelExceptions::getErrorMsg(4);
// Unknown error
```


## Тестирование и покрытие кода

PHPUnit используется для модульного тестирования. Данные тесты гарантируют, что методы класса выполняют свою задачу.

Подробную документацию по PHPUnit можно найти по адресу: https://phpunit.de/documentation.html.

Чтобы запустить тесты выполните:
```bash
phpunit PATH/TO/PROJECT/tests/
```

Чтобы сформировать отчет о покрытии тестами кода, необходимо выполнить следующую команду:
```bash
phpunit --coverage-html ./report PATH/TO/PROJECT/tests/
```

Чтобы использовать настройки по умолчанию, достаточно выполнить:
```bash
phpunit --configuration PATH/TO/PROJECT/phpunit.xml
```


## Вклад в общее дело

Вы можите поддержать данный проект [здесь](https://www.paypal.me/cseliseev/10usd). 
Вы также можете помочь, внеся свой вклад в проект или сообщив об ошибках.
Даже высказывать свои предложения по функциям - это здорово. Все, что поможет, высоко ценится.


## Лицензия

EXCEPTIONS CSE BASE это PHP-библиотека с открытым исходным кодом распространяемая по лицензии MIT. Для получения более подробной информации, пожалуйста, ознакомьтесь с [лицензионным файлом](https://github.com/cs-eliseev/base-exceptions/blob/master/LICENSE.md).

***

> GitHub [@cs-eliseev](https://github.com/cs-eliseev)