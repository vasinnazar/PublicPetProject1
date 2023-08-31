<?php

namespace App\Actions;

use App\Helpers\XmlParser;
use Currency;
use Mapper;

class GetXmlAction
{
      public function action()
      {
          $mapper =  new Mapper();
          $parser = new XmlParser();
          $currency = new Currency();
          $currency->setCurrencies($parser->XmlToArray());
          $mapper->insert($currency);
          return $currency;
      }
}