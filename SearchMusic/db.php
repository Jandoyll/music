<?php
require "libs/rb.php";

R::setup( 'mysql:host=localhost;dbname=registration',
        'root', 'root' );

if(!R::testConnection()) die('Нет соединения с БД');

session_start(); 
?>