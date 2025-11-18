<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    // GET /api/devices
    public function index()
    {
        return Device::all();
    }

    // POST /api/devices
    public function store(Request $request)
    {
        // Walidacja danych wejściowych
        $validated = $request->validate([
            'user_id'        => 'required|exists:users,id',
            'name'           => 'required|string|max:255',
            'category'       => 'nullable|string|max:255',
            'model'          => 'nullable|string|max:255',
            'serial_number'  => 'nullable|string|max:255',
            'purchase_date'  => 'nullable|date',
            'warranty_until' => 'nullable|date|after_or_equal:purchase_date',
        ]);

        // Utworzenie urządzenia
        $device = Device::create($validated);

        // Zwracamy JSON + kod 201 (Created)
        return response()->json($device, 201);
    }
}
