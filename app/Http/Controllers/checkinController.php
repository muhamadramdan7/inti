<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\checkin;
use App\item;

class checkinController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = checkin::with('get_item')->get();
        $item = item::where('stock','>',1)->get();
        $notif = item::where('stock','<=','5')->count();
        return view('inventory.checkin', compact('data','item','notif')); 
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
        $item = item::findOrFail($request->id_barang);
      
        $stock = $item->stock;
        $masuk = $request->get('qty');
        $pertambahan = $stock + $masuk;
        $item->stock = $pertambahan;
        $item->update();

        $checkin = new checkin([
            'id_barang' => $request->get('id_barang'),
            'qty' => $request->get('qty')
        ]);
        $checkin->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
