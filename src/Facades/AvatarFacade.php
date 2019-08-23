<?php
namespace Mution\MakePic\Facades;
use Illuminate\Support\Facades\Facade;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-08-23
 * Time: 10:14
 */

class AvatarFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'avatar';
    }
}