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

    /**
     * Get error msg
     *
     * @param int $code
     *
     * @return string
     */
    public static function getErrorMsg(int $code): ?string
    {
        return static::$errorsMsg[$code] ?? self::DEFAULT_ERROR_MSG;
    }
}