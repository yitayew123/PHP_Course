<?php
// Custom Exception Class
class InvalidInputException extends Exception {
    public function errorMessage() {
        // Error message
        return "Error on line " . $this->getLine() . " in " . $this->getFile()
               . ": " . $this->getMessage();
    }
}

try {
    $input = "invalid";

    if ($input != "valid") {
        // Throw custom exception
        throw new InvalidInputException("Invalid input provided.");
    }
} catch (InvalidInputException $e) {
    // Display custom error message
    echo $e->errorMessage();
}
?>



