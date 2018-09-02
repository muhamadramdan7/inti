<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;

class itemController extends Controller
{
       
        public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = item::orderBy('stock','asc')->get();
        $notif = item::where('stock','<=','5')->count();
        return view('inventory.item',compact('data','notif'));
    }
     public function store(request $request)
    {
        $data = new item([
            'kode_barang' => $request->get('kode_barang'),
            'nama' => $request->get('nama'),
            'stock' => $request->get('stock'),
            'lokasi' => $request->get('lokasi')
        ]);
        $data->save();
        return back();
    }

    public function destroy(request $request)
    {
       
        $data = item::findOrFail($request->id);
        $data->delete();
        return back();


    }
    public function update(request $request)
    {
        $data = item::findOrFail($request->id);
        $data->update($request->all());
     

      
        return back();
        
    }
}
