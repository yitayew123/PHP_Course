<?php
// Function that checks the age and throws an exception if the condition is not met
function checkAge($age) {
    if ($age < 18) {
        // Throw an exception if age is less than 18
        throw new Exception("Age must be 18 or older.");
    } else {
        echo "Age is valid.";
    }
}

// Try block to handle the exception
try {
    checkAge(16); // This will trigger the exception
} catch (Exception $e) {
    // Catch block to handle the exception
    echo "Error: " . $e->getMessage();
}
?>

