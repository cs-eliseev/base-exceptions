<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'tests-data' . DIRECTORY_SEPARATOR .  'ModelExceptions.php';

use cse\base\CseExceptions;
use PHPUnit\Framework\TestCase;

class TestException extends TestCase
{
    /**
     * @param $class
     *
     * @throws ModelExceptions
     *
     * @dataProvider providerCheckInstance
     *
     * @runInSeparateProcess
     */
    public function testCheckInstance($class): void
    {
        $this->expectException($class);

        throw new ModelExceptions('Create exception');
    }

    /**
     * @return array
     */
    public function providerCheckInstance(): array
    {
        return [
            [ModelExceptions::class],
            [CseExceptions::class],
            [Exception::class],
            [Throwable::class],
        ];
    }
}