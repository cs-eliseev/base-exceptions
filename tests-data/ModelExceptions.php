<?php

require_once __DIR__ . '/../autoload.php';

use cse\base\CseExceptions;

/**
 * Class ExamplesException
 */
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