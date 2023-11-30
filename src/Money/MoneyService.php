<?php

namespace App\Money;

class MoneyService
{
    private array $currencies;

    public function __construct(array $currencies = [])
    {
        $this->currencies = $currencies;
    }

    private function checkIfCurrencyExists(string $currency): void
    {
        if (array_key_exists($currency, $this->currencies) == false) {
            throw new \Exception("The currency of \"$currency\" can not be detected");
        }
    }

    public function makeOfMajor(float $amount, string $currency): Money
    {
        $this->checkIfCurrencyExists($currency);

        $precision = $this->currencies[$currency]['minor_unit'];

        $newFloatAmount = $amount * pow(10, $precision);

        $intAmount = round($newFloatAmount, 0);

        return new Money($intAmount, $currency);
    }

    public function makeOfMinor(int $amount, string $currency): Money
    {
        $this->checkIfCurrencyExists($currency);

        return new Money($amount, $currency);
    }
}