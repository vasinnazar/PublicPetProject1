<?php

namespace App\Helpers;

class CurlRequests
{
      const URL = "http://www.cbr.ru/scripts/XML_daily.asp";
      public function getXml()
      {
          $curl = curl_init();
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($curl, CURLOPT_URL, self::URL);
          $result = curl_exec($curl);
          $xml = simplexml_load_string($result);

          return $xml;
      }
}