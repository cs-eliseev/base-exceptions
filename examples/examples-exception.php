<?php

require_once __DIR__ . '/../autoload.php';

use cse\base\CseExceptions;

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'tests-data' . DIRECTORY_SEPARATOR .  'ModelExceptions.php';

// Example: check instance
// ModelExceptions
try {
    throw new ModelExceptions('ModelExceptions');
} catch (ModelExceptions $e) {
    var_dump('Check instance: ' . $e->getMessage());
}
// CseExceptions
try {
    throw new ModelExceptions('CseExceptions');
} catch (CseExceptions $e) {
    var_dump('Check instance: ' . $e->getMessage());
}
// Exception
try {
    throw new ModelExceptions('Exception');
} catch (Exception $e) {
    var_dump('Check instance: ' . $e->getMessage());
}
// Throwable
try {
    throw new ModelExceptions('Throwable');
} catch (Throwable $e) {
    var_dump('Check instance: ' . $e->getMessage());
}

// Example: throw new exception
// Error code 1
try {
    ModelExceptions::throwException(ModelExceptions::ERROR_EXAMPLE_CODE_1);
} catch (CseExceptions $e) {
    var_dump('Throw new exception: ' . $e->getMessage());
}
// Error code 2 - msg test
try {
    ModelExceptions::throwException(ModelExceptions::ERROR_EXAMPLE_CODE_2, ' - msg test');
} catch (CseExceptions $e) {
    var_dump('Throw new exception: ' . $e->getMessage());
}
// Unknown error
try {
    ModelExceptions::throwException(4);
} catch (CseExceptions $e) {
    var_dump('Throw new exception: ' . $e->getMessage());
}