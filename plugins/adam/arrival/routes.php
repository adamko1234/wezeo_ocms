<?php
use Adam\Arrival\Models\Arrival;

Route::get('getArrivals', function (){
    return Arrival::get();
});

Route::post('postArrivals',function(){
    Arrival::create([
        'name'=> $_POST['name'],
        'time'=> $_POST['time'],
    ]);
    return "Arrival created<3";
});

//Route::get('hello', function () {
//    return 'Hello World';
//});
