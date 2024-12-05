<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dogcontroller extends fanController
{
//    public function gopi(){
//     return "bark";
//    }
   public function showSound()
{
    $animal = new Dogcontroller();  
    $sound = $animal->gopi();  

    return ($sound);  
}
}

