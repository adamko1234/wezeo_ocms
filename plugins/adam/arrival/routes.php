<?php
use Adam\Arrival\Models\Arrival;
Route::name('api')->group(function(){
    Route::get('getArrivals', function (){
        return Arrival::get();
    });

    Route::post('postArrivals',function(){
        Arrival::create([
            'name'=> post('name'),
            'time'=> post('time'),
        ]);
        return "Arrival created<3";
    });
});

//Route::get('hello', function () {
//    return 'Hello World';
//});
