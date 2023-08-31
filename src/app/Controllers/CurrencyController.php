<?php

namespace app\Controllers;

use Actions\GetCurrenciesAction;
use App\Actions\GetXmlAction;

class CurrencyController
{
    public function show(GetCurrenciesAction $getCurrenciesAction)
     {
         $currencies = $getCurrenciesAction->action();
         if (!$currencies) {
             return $this->showFromXml();
         }
         header("Content-Type: application/json");
         echo json_encode($currencies);
     }

     public function showFromXml()
     {
         $getXmlAction = new GetXmlAction();
         return $getXmlAction->action();
     }
}