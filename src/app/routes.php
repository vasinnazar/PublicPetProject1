<?php

use Actions\GetCurrenciesAction;
use App\Actions\CreateDBTable;
use App\Controllers\CurrencyController;

return [
     // Запрос на создание таблицы
    '/createTable' => function () {
        $action = new CreateDBTable();
        $action->action();
    },
    // Запрос на получение данных по курсам валют
    '/currencies' => function () {
        $currency = new CurrencyController();
        $action = new GetCurrenciesAction();
        $currency->show($action);
    }
];