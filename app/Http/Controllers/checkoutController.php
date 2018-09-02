<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\checkout;
use App\item;


class checkoutController extends Controller
{

        public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = checkout::with('get_item')->get();
        $item = item::where('stock','>',1)->get();
        $notif = item::where('stock','<=','5')->count();
        return view('inventory.checkout', compact('data','item','notif')); 
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
        if($item->stock < $request->get('qty')){
            return back();
        }
        $stock = $item->stock;
        $ambil = $request->get('qty');
        $pengurangan = $stock - $ambil;
        $item->stock = $pengurangan;
        $item->update();

        $checkout = new checkout([
            'id_barang' => $request->get('id_barang'),
            'qty' => $request->get('qty')
        ]);
        $checkout->save();

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
