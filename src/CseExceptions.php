<?php

declare(strict_types=1);

namespace cse\base;

use Exception;

/**
 * Class CseException
 *
 * @package cse\based\extend
 */
class CseExceptions extends Exception
{
    protected const DEFAULT_ERROR_MSG = 'Unknown error';

    /**
     * @var array
     */
    private static $errorsMsg = [];
}