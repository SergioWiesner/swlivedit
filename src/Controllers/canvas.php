<?php

namespace sw\livedit\Controllers;
use sw\livedit\MainInterface;
use Illuminate\Http\Request;

class canvas extends Controller implements MainInterface
{
    public static function foreground($landscape = " "){
      return View('swlivedit.foreground')
      ->with('landscape', $landscape);
    }
    public static function landscapeHtml(){
      return View('swlivedit.landscapes.htmlcomponent');
    }
    public static function landscapeCss(){
      return View('swlivedit.landscapes.csscomponent');
    }
    public static function landscapeJs(){
      return View('swlivedit.landscapes.jscomponent');
    }
    public function Metodo1(){
      dd("Es esta clase canvas");
    }
}
