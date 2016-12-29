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
    public static function is($name='', $or=null){
        $routeName = Route::getFacadeRoot()->current()->getName();
        $found     =  $routeName == $name ? true : false;

        // If we have found it, just return true
        if($found) return true;

        // If we have NOT found it, and $or is NOT set, return false
        if(!$or) return false;

        // However, if $or is set, we will check when it is a string or an array.
        // If it is not an array, we gonna compare the next condition
        if(!is_array($or)):
           $found = ($routeName == $or) ? true : false;
           if($found) return true;
        endif;

        // Quickfix for string array conversion
        if(!is_array($or)):
            $na = [$or];
            $or = $na;
        endif;

        // Last but not least, this is the condition if the $or is an array
        // We will directly search for the route value and compare it against
        return (array_search($routeName, $or)) !== false ? true : false;
    }


    /*
        Adds item to the Menu item array
        use this to include each part of the navigation
    */
    public static $menu = [];
    public static function add($place='', $view, $lvl=''){
        if($lvl)
            self::$menu[$place][$lvl] = $view;
        else
            self::$menu[$place][] = $view;
    }

    public static function get($place=''){
        return isset(self::$menu[$place]) ? $menu[$place] : false;
    }

    public static function render($menu){
        if(is_array($menu) && !empty($menu))
        foreach($menu as $item)
            echo "@include('$item')";
        else
        echo "No Menu items found";
    }
}
