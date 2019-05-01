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
        return static::$errorsMsg[$code] ?? static::DEFAULT_ERROR_MSG;
    }

    /**
     * Throw new exception
     *
     * @param int $code
     * @param string|null $msg
     *
     * @throws CseExceptions
     */
    public static function throwException(int $code, ?string $msg = ''): void
    {
        throw new static(static::getErrorMsg($code) . (empty($msg) ? '' : $msg), $code);
    }
}