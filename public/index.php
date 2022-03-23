<?php

require __DIR__ . '/../vendor/autoload.php ';

$request= new App\Http\controllers\Request.php;

$request->setController("hola");
echo $request->getController();







