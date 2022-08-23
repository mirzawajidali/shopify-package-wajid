<?php
namespace App\Query;

use Illuminate\Support\Facades\Facade;

class QueryFacade extends Facade{
    protected static function getFacadeAccessor() { return 'query'; }
}
