<?php
namespace Gkiokan\Core\Helpers;

class Menu {

    public static function is($name=''){
        $routeName =  \Illuminate\Support\Facades\Route::getFacadeRoot()->current()->getName();
        return $routeName == $name ? true : false;
    }

}
