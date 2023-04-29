<?php

namespace App\mixins;

class StrMixins
{
    public function partNumber(){
        return function ($part){
            return "AB-".substr($part,0,3)."-".substr($part,3);
        };
    }
    public function preFix(){
        return function ($string,$prefix){
            return $string.'-'.$prefix;
        };
    }
}
