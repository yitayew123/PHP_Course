<?php
function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("Division by zero.");
    }
    return $a / $b;
}

try {
    echo divide(10, 0); // This will throw an exception
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    echo "\nCleaning up...";  // This will always run
}
?>


