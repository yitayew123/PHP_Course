<?php
class FileHandler {
    private $file;

    // Constructor to open a file
    public function __construct($filename) {
        $this->file = fopen($filename, "w");
        echo "File opened: " . $filename . "<br>";
    }

    // Destructor to close the file
    public function __destruct() {
        if ($this->file) {
            fclose($this->file);
            echo "File closed.<br>";
        }
    }
}

// Creating a new FileHandler object
$fileHandler = new FileHandler("example.txt");

// Destructor will automatically close the file when the script ends
?>


