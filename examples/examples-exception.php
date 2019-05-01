<?php

require_once __DIR__ . '/../autoload.php';

use cse\base\CseExceptions;

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'tests-data' . DIRECTORY_SEPARATOR .  'ModelExceptions.php';

// Example: check instance
$label = 'Check instance: ';
// ModelExceptions
try {
    throw new ModelExceptions('ModelExceptions');
} catch (ModelExceptions $e) {
    var_dump($label . $e->getMessage());
}
// CseExceptions
try {
    throw new ModelExceptions('CseExceptions');
} catch (CseExceptions $e) {
    var_dump($label . $e->getMessage());
}
// Exception
try {
    throw new ModelExceptions('Exception');
} catch (Exception $e) {
    var_dump($label . $e->getMessage());
}
// Throwable
try {
    throw new ModelExceptions('Throwable');
} catch (Throwable $e) {
    var_dump($label . $e->getMessage());
}

// Example: throw new exception
$label = 'Throw new exception: ';
// Error code 1
try {
    ModelExceptions::throwException(ModelExceptions::ERROR_EXAMPLE_CODE_1);
} catch (CseExceptions $e) {
    var_dump($label . $e->getMessage());
}
// Error code 2 - msg test
try {
    ModelExceptions::throwException(ModelExceptions::ERROR_EXAMPLE_CODE_2, ' - msg test');
} catch (CseExceptions $e) {
    var_dump($label . $e->getMessage());
}
// Unknown error
try {
    ModelExceptions::throwException(4);
} catch (CseExceptions $e) {
    var_dump($label . $e->getMessage());
}

// Example: get error msg
$label = 'Get error msg: ';
// ModelExceptions
var_dump($label . ModelExceptions::getErrorMsg(ModelExceptions::ERROR_EXAMPLE_CODE_3));
var_dump($label . ModelExceptions::getErrorMsg(4));