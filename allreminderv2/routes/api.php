<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DeviceController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('devices', DeviceController::class)->only([
    'index',
    'store',
]);

Route::get('/services/{id}', function ($id) {
    $services = [
        1 => ['id' => 1, 'name' => 'Przegląd oleju', 'type' => 'car'],
        2 => ['id' => 2, 'name' => 'Serwis pralki', 'type' => 'device'],
        3 => ['id' => 3, 'name' => 'Przegląd klimatyzacji', 'type' => 'home'],
    ];

    if (!is_numeric($id)) {
        return response()->json([
            'error' => 'Invalid ID format',
        ], 400);
    }   

    if (!isset($services[$id])) {
        return response()->json([
            'error' => 'Service not found',
        ], 404);
    } 

    return response()->json($services[$id], 200);
});

