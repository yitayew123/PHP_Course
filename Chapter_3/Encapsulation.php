<?php
class BankAccount {
    // Private properties
    private $accountNumber;
    private $balance;
    // Constructor to initialize the properties
    public function __construct($accountNumber, $initialBalance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    // Getter for accountNumber
    public function getAccountNumber() {
        return $this->accountNumber;
    }
    // Getter for balance
    public function getBalance() {
        return $this->balance;
    }

    // Method to deposit money
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            return true;
        }
        return false;
    }

    // Method to withdraw money
    public function withdraw($amount) {
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
}

// Example usage
$account = new BankAccount("123456789", 1000);
echo "Account Number: " . $account->getAccountNumber() . PHP_EOL; // Output: Account Number: 123456789
echo "Initial Balance: " . $account->getBalance() . PHP_EOL;      // Output: Initial Balance: 1000

$account->deposit(500);
echo "Balance after deposit: " . $account->getBalance() . PHP_EOL; // Output: Balance after deposit: 1500

if ($account->withdraw(300)) {
    echo "Withdrawal successful. New Balance: " . $account->getBalance() . PHP_EOL; // Output: Withdrawal successful. New Balance: 1200
} else {
    echo "Insufficient funds for withdrawal." . PHP_EOL;
}
?>


