<?php

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Karabulutmehmet\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Karabulutmehmet\Calculator\CalculatorController@subtract');