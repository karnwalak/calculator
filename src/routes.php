<?php

use Karnwalak\Calculator\CalculatorController;

Route::get('calculator', function(){
  echo 'Hello from the calculator package!';
});

Route::get('add', [CalculatorController::class,'add']);
Route::get('subtract', [CalculatorController::class,'subtract']);