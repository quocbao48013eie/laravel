<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // echo 'welcome';
    // return view('welcome');

    $name = 'Le Van Test';

    return view('abc/xyz/ffff/a', ['name' => $name]);
});

Route::get('test', function() {
    echo '<h2>Test</h2>';
});

Route::get('a/b/c/d/e/f', function() {
    $name = 'NGuyen Van A';
    echo "<h2>$name</h2>";
});

Route::get('name/{name?}', function ($name = 'null'){
    echo $name;
});

Route::get('product/detail/{id}', function ($id){
    echo $id;
});

Route::get('ten/{ten?}/tuoi/{tuoi?}', function($name ='unknow', $age = 1){
    echo "ten : $name, tuoi: $age";
});

Route::get('test/{test?}', function ($test = 'null'){
    echo $test;
});