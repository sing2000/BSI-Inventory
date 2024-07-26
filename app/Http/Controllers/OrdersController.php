<?php

namespace App\Http\Controllers;

use App\Models\UOM;
use App\Models\Items;
use App\Models\Orders;
use App\Models\Suppliers;
use App\Models\OrderInfor;
use Illuminate\Http\Request;
use App\Models\IteamCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Supplier = Suppliers::all();
        $items = Items::all();
        $uom = UOM::all();
        $order = Orders::all();
        $order_inf = OrderInfor::all();
        $categories = IteamCategory::all();
        $order_inf_counts = $order->groupBy('Order_Info_id')->map(function ($group) {
            return $group->count();
        });
        return view('orders', compact('Supplier','items','uom','order_inf','categories','order_inf_counts')); 
   
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
        // dd($request->all());
        // Validate the request data
        $request->validate([
            'Order_number' => 'required|string|max:255',
            'Reciept_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Total_Price' => 'required|numeric',
            'Sup_id' => 'required|integer',
            'selectnum' => 'required|integer|min:1',
        ]);
    
        // Handle the receipt image upload
        if ($request->hasFile('Reciept_image')) {
            $imagePath = $request->file('Reciept_image')->store('receipt_images', 'public');
            $validatedData['Reciept_image'] = $imagePath;
        }
    
        // Create the OrderInfo
        $order = OrderInfor::create([
            'Order_number' => $request->Order_number,
            'Reciept_image' => $imagePath,
            'Total_Price' => $request->Total_Price,
            'Sup_id' => $request->Sup_id,
            'S_id' => Auth::user()->invshop->S_id,
            'L_id' => Auth::user()->invLocation->L_id,
            'inc_VAT' =>  $request->inc_VAT ? 1 : 0,
            'order_date' => $request->order_date,

        ]);
    
        // Create the individual Orders
        $numberOfItems = $request->selectnum;

        for ($i = 0; $i < $numberOfItems; $i++) {
            Orders::create([
                'Order_Info_id' => $order->Order_Info_id,
                'Item_id' => $request->input("inputSelectItem".($i+1)),
                'Qty' => $request->input("Qty".($i+1)),
                'UOM_id' => $request->input("inputSelectUOM".($i+1)),
                'price' => $request->input("price".($i+1)),
              
            ]);
   
        }

        return redirect()->back()->with('success', 'Order created successfully!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy( $Order_Info_id)
    {
        OrderInfor::destroy($Order_Info_id);
        return redirect('orders')->with('flash_message', 'orders deleted!');
    }
}
