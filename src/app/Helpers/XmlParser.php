<?php

namespace App\Helpers;

use App\Helpers\CurlRequests;
class XmlParser
{
     public function XmlToArray(): array
     {
         $curls = new CurlRequests();
         $xml = $curls->getXml();
         $currenciesData = [];

         foreach ($xml->children() as $children) {
             array_push($currenciesData, [
                 'nominal'  => $children->Nominal,
                 'currency' => $children->Name,
                 'value'    => $children->Value,
                 'num_code' =>  $children->NumCode,
                 'char_code' => $children->CharCode
             ]);
         }
         return $currenciesData;
     }
}