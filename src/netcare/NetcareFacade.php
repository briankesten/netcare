<?php
/**
 * Created by PhpStorm.
 * User: bk
 * Date: 1/2/2016
 * Time: 11:03 PM
 */


namespace Netcare;


use Illuminate\Support\Facades\Facade;

class NetcareFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'usd';
    }

}






