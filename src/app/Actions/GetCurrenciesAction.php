<?php

namespace Actions;

use Mapper;

class GetCurrenciesAction
{
     public function action()
     {
         $mapper = new Mapper();
         return $mapper->selectLatest();
     }
}