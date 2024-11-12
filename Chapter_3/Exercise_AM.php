<?php

class BankAccount {
    public $accountNumber; // Public property: accessible from outside
    protected $balance;    // Protected property: accessible only within the class and subclasses
    private $pin;          // Private property: accessible only within the class

    // Constructor to initialize the properties
    public function __construct($accountNumber, $initialBalance, $pin) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
        $this->pin = $pin;
    }

    // Public method to deposit amount
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Successfully deposited $amount.\n";
        } else {
            echo "Deposit amount must be positive.\n";
        }
    }

    // Protected method to get balance
    protected function getBalance() {
        return $this->balance;
    }

    // Public method to show balance if the entered PIN is correct
    public function showBalance($enteredPin) {
        if ($enteredPin === $this->pin) {
            echo "Account Balance: $" . $this->getBalance() . "\n";
        } else {
            echo "Incorrect PIN. Cannot display balance.\n";
        }
    }
}

// Creating an instance of the BankAccount class
$account = new BankAccount("12345678", 500, 1234);

// Depositing money
$account->deposit(200); // Output: Successfully deposited 200

// Attempt to view balance with the correct PIN
// $account->showBalance(1234); // Output: Account Balance: $700

// Attempt to view balance with an incorrect PIN
$account->showBalance(5678); // Output: Incorrect PIN. Cannot display balance.
?>