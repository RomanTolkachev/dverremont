<?php

namespace App\Money;

class Money
{
    public int $amount;
    public string $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;

        $this->currency = $currency;
    }

    private function checkCurrency(Money $secondNumber): void
    {
        if ($this->currency != $secondNumber->currency) {
            throw new \Exception ('second argument has another currency!');
        }
    }

    public function round(int $precision = 2): Money
    {
        $newAmount = round($this->amount, $precision);

        return new Money($newAmount, $this->currency);
    }

    public function plus(Money $addend): Money
    {
        $this->checkCurrency($addend);

        $newAmount = $this->amount + $addend->amount;

        return new Money($newAmount, $this->currency);
    }

    public function minus(Money $subtrahend): Money
    {
        $this->checkCurrency($subtrahend);

        $newAmount = $this->amount - $subtrahend->amount;

        return new Money($newAmount, $this->currency);
    }

    public function multipy(float $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function divideInto(float $quotient): Money
    {
        if ($quotient == 0) {
            throw new \Exception('Quotient shall not be zero');
        }

        $newAmount = round($this->amount / $quotient);

        return new Money($newAmount, $this->currency);
    }

    public function __toString(): string
    {
        return sprintf("%s %s", $this->amount, $this->currency);
    }
}

























































