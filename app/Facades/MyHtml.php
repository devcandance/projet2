<?php namespace App\Facades;

use Illuminate\Support\Facades\Facade; //pattern facade

class MyHtml extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'myHtml';
    }
}