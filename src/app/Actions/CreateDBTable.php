<?php

namespace App\Actions;

use Mapper;

class CreateDBTable
{
    public function action()
    {
        $mapper = new Mapper();
        $mapper->createTable();
    }
}