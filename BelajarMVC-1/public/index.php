<?php

if( !session_id()) {
    
   session_start();

} 

//file ini digunakan untuk memanggil seluruh file web kita
require_once '../app/init.php';

//memanggil class App dari file APP.php
$app = new App;
