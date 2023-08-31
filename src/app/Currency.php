<?php

class Currency
{
    private $record_date;
    private $currencies;

    public function __construct()
    {
        $this->record_date = date("Y-m-d");
    }
    public function getRecordDate()
    {
        return $this->record_date;
    }

    public function getCurrencies()
    {
        return $this->currencies;
    }

    public function setCurrencies(array $attributes)
    {
        $this->currencies = $attributes;
    }
}