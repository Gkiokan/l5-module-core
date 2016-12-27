<?php
namespace Gkiokan\Core\Helpers;

use \Illuminate\Support\Facades\Route;

class Menu {

    /*
        Current Route is trur | false
        ----
        Menu item is in current Path ?
        Requires $name to be a valid Path name
        Returns matching route true anything else false.
    */
    public static function is($name=''){
        $routeName = Route::getFacadeRoot()->current()->getName();
        return $routeName == $name ? true : false;
    }

}
