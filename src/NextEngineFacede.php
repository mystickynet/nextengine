<?php 

namespace Mystickynet\NextEngine;

use Illuminate\Support\Facades\Facade;

class NextEngineFacade extends Facade
{
    protected static function getFacadeAccessor() { 
        return 'nextengineclient';
    }
}