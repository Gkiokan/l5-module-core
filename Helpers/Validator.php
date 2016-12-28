<?php
/*
    Extend the Validator rule by alpha_space
    extends( $rule_name, $regex, $translation_message )
*/
Validator::extend('alpha_spaces',
                  function($attribute, $value){
                      //return preg_match('/^[\pL\s]+$/u', $value);
                      return preg_match('/^[a-z\d\-_\/\s]+$/i', $value);
                  },
                  trans('core::validation.alpha_spaces')
);
