<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomVehicle;
use App\Http\Requests\VehicleUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CustomVehicleController extends Controller
{

    /**
     * Display the user's profile form.
     */
    public function addVehicle(Request $request): View
    {
        return view('profile.add-vehicle', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Display the user's profile form.
     */
    public function editVehicle(Request $request, CustomVehicle $vehicle): View
    {
        return view('profile.edit-vehicle', [
            'user' => $request->user(),
            'vehicle' => $vehicle
        ]);
    }

    /**
     * Display the user's profile form.
     */
    public function saveVehicle(VehicleUpdateRequest $request): RedirectResponse
    {

        $vehicle = CustomVehicle::create($request->all());
        
        return redirect()->route('profile.view')->with('success', 'Veicolo creato con successo!');
    }

    /**
     * Display the user's profile form.
     */
    public function updateVehicle(VehicleUpdateRequest $request, CustomVehicle $vehicle): RedirectResponse
    {
        $vehicleData = $request->all();

        $vehicle->fill($vehicleData);
        $vehicle->save();

        return redirect()->route('profile.view')->with('success', 'Veicolo modificato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
