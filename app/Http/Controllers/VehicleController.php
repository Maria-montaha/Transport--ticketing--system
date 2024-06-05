<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        return view('vehicle.index', ['vehicle' => vehicle::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        vehicle::create($request->all());
        return redirect()->route('vehicle.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vehicle $vehicle)
    {
        return view('vehicle.edit', ['vehicle' => $vehicle]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vehicle $vehicle)
    {
        $vehicle->update($request->all());
        return redirect()->route('vehicle.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicle.index');
    }
}




    /**
     * Display a listing of the resource.
     */
//     public function index()
//     {
//         //
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(Vehicle $vehicle)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(Vehicle $vehicle)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, Vehicle $vehicle)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(Vehicle $vehicle)
//     {
//         //
//     }
// }
