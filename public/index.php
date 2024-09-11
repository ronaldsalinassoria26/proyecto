<?php

require '../vendor/autoload.php';

$element = new \App\htmlElement('p',['id' => 'my_paragraph'],'Este es el contenido');

echo $element->render();

$element = new \App\htmlElement('p',[],'Este es el contenido 2');

echo $element->render();