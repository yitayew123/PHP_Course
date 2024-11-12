<?php
class BankAccount {
    private $balance;

    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function getBalance() {
        return "Current balance: $" . $this->balance;
    }
}

$account = new BankAccount(100);
// $account->balance = 200; // This will throw an error as balance is private
$account->deposit(50);
echo $account->getBalance();  // Output: Current balance: $150
?>


