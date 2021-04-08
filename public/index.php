<?php 
require '../vendor/autoload.php';

use App\Wcs\Hello;
use  HelloWorld\SayHello;

$message = new SayHello();


        ?>    
    
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?= $message-> world();?>
    </body>
    </html>