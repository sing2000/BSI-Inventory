<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Suppliers::paginate(8); 
        return view('suppliers', compact('suppliers'));
    
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
            'Sup_name' => 'required|string|max:255',
            'Sup_contact' => 'required|string|max:255',
            'Sup_address' => 'required|string',
        ]);

        $supplier = new Suppliers();
        $supplier->Sup_name = $validatedData['Sup_name'];
        $supplier->Sup_contact = $validatedData['Sup_contact'];
        $supplier->Sup_address = $validatedData['Sup_address'];
        $supplier->save();

        return redirect()->back()->with('success', 'Supplier added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function show(Suppliers $suppliers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function edit(Suppliers $suppliers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Sup_id)
    {

        // Validate the request data
        $validatedData = $request->validate([
            'Sup_name' => 'required|string|max:255',
            'Sup_contact' => 'required|string|max:255',
            'Sup_address' => 'required|string',
        ], [
            'Sup_name.required' => 'Please input Supplier Name',
            'Sup_contact.required' => 'Please input Supplier Contact',
            'Sup_address.required' => 'Please input Supplier Address',
        ]);
    
        // Find the supplier by ID
        $supplier = Suppliers::find($Sup_id);
 
    
        // Update the supplier data
        $supplier->Sup_name = $validatedData['Sup_name'];
        $supplier->Sup_contact = $validatedData['Sup_contact'];
        $supplier->Sup_address = $validatedData['Sup_address'];
    
        // Save the changes
        $supplier->save();
    
        return redirect('/suppliers')->with('flash_message', 'Supplier Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function destroy($Sup_id)
    {

        Suppliers::destroy($Sup_id);
        return redirect('suppliers')->with('flash_message', 'suppliers deleted!');
    }
}
