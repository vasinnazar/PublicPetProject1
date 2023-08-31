<?php

class Mapper
{
    private $db;

    public function __construct()
    {
        $this->db = pg_connect("host=db port=5432 dbname=auth user=auth_user password=auth_secret");
    }

    public function insert(Currency $currency)
    {
         pg_insert($this->db, 'currencies', ['record_date' => date("Y-m-d"), 'currencies' => json_encode($currency->getCurrencies())]);
    }

    public function selectLatest()
    {
        $today = date("Y-m-d");
        $result = pg_query($this->db, "SELECT * FROM currencies WHERE record_date = '$today'");
        if ($result) {
            $currencies = pg_fetch_all($result);
            if (!$currencies) return null;
            return $currencies;
        }
        return null;
    }

    public function createTable()
    {
         pg_query($this->db, "CREATE TABLE currencies (id SERIAL PRIMARY KEY, record_date DATE, currencies JSONB)");
    }
}