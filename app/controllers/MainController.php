<?php

namespace app\controllers;

use core\Tone;

class MainController extends AppController {
    
    public function indexAction() {
    
       $this->setMeta(
           Tone::$app->getProperty('site_name'),
           'СИЛК ЕН ПРОЗ - Clothing brand. Silken Prose is a open source clothing brand.',
           'СИЛК ЕН ПРОЗ, Silken Prose, Clothing brand, silkenprose'
       );
    }
}