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
