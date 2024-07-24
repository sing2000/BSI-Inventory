<?php

namespace App\Http\Controllers;

use App\Models\UOM;
use App\Models\Addons;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uom =UOM::all();
        $Addons = Addons::with('uom')->paginate(8); 
        return view('add-ons', compact('Addons','uom')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Addons_name' => 'required|string|max:255',
            'Percentage' => 'nullable|string|max:255',
            'Qty' => 'required|integer',
            'Percentage' => 'required|numeric',
            'UOM_id' => 'required|integer',

        ]);


        Addons::create($validatedData);

        // Redirect or return response
        return redirect()->back()->with('success', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Addons  $addons
     * @return \Illuminate\Http\Response
     */
    public function show(Addons $addons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Addons  $addons
     * @return \Illuminate\Http\Response
     */
    public function edit(Addons $addons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Addons  $addons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Addons $addons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Addons  $addons
     * @return \Illuminate\Http\Response
     */
    public function destroy($Addons_id)
    {
        Addons::destroy($Addons_id);
        return redirect('add-ons')->with('flash_message', 'Addons deleted!');
    }
}
