<?php
use Adam\Arrival\Models\Arrival;
Route::prefix('api/v1')->group(function(){
    Route::get('getArrivals', function (){
        return Arrival::get();
    });

    Route::post('newArrival',function(){
        Arrival::create([
            'name'=> post('name'),
            'time'=> post('time'),
        ]);
        return "Arrival created<3";
    });
});

