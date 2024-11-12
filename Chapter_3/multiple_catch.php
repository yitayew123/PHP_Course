<?php
class CustomException extends Exception {}

try {
    $value = 0;

    if ($value == 0) {
        throw new CustomException("Custom exception: Value cannot be zero.");
    }
} catch (CustomException $e) {
    echo "Caught Custom Exception: " . $e->getMessage();
} catch (Exception $e) {
    echo "Caught Default Exception: " . $e->getMessage();
}
?>

