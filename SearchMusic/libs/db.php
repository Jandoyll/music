<?php

require __DIR__ . '/rb.php'

// Подключаемся к БД
R::setup( 'mysql:host=localhost;dbname=registration',
        'root', 'root' );

// Проверка подключения к БД
if(!R::testConnection()) die('No DB connection!');

session_start(); // Создаем сессию для авторизации
?>