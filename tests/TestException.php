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

    /**
     * @param int $code
     * @param string|null $msg
     *
     * @throws CseExceptions
     *
     * @dataProvider providerThrowException
     *
     * @runInSeparateProcess
     */
    public function testThrowException(int $code, ?string $msg): void
    {
        $this->expectException(CseExceptions::class);

        ModelExceptions::throwException($code, $msg);
    }

    /**
     * @return array
     */
    public function providerThrowException(): array
    {
        return [
            [
                ModelExceptions::ERROR_EXAMPLE_CODE_1,
                null
            ],
            [
                ModelExceptions::ERROR_EXAMPLE_CODE_2,
                ' - msg test'
            ],
            [
                4,
                null
            ],
        ];
    }

    /**
     * @param int $code
     * @param string $expected
     *
     * @dataProvider providerGetErrorMsg
     *
     * @runInSeparateProcess
     */
    public function testGetErrorMsg(int $code, string $expected): void
    {
        $this->assertEquals($expected, ModelExceptions::getErrorMsg($code));
    }

    /**
     * @return array
     */
    public function providerGetErrorMsg(): array
    {
        return [
            [
                ModelExceptions::ERROR_EXAMPLE_CODE_3,
                'Error code 3'
            ],
            [
                4,
                'Unknown error'
            ],
        ];
    }
}