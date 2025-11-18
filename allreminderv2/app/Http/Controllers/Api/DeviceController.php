<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        // urządzenia tylko zalogowanego użytkownika
        return Device::where('user_id', auth()->id())->get();
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'           => 'required|string|max:255',
            'category'       => 'nullable|string|max:255',
            'model'          => 'nullable|string|max:255',
            'serial_number'  => 'nullable|string|max:255',
            'purchase_date'  => 'nullable|date',
            'warranty_until' => 'nullable|date|after_or_equal:purchase_date',
        ]);
    
        $device = Device::create([
            'user_id'        => auth()->id(),  // <- kluczowa zmiana
            ...$validated,
        ]);
    
        return response()->json($device, 201);
    }
}