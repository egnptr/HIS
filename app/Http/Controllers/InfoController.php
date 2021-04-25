<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function infodata()
    {
        $info = DB::table('inform')->get();
        
        //return $info;
        //return view('order.orderdata', ['order'=>$order]);
        return view('pharmacy.infodata', compact('info'));
    }
    public function addorder()
    {
        return view('pharmacy.addorder');
    }
    public function orderenter(Request $request)
    {
        DB::table('inform')->insert([
            'Nama_Farmasis' => $request->Nama_Farmasis,
            'Nama_Obat' => $request->Nama_Obat,
            'Jenis_Obat' => $request->Jenis_Obat,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
            'Supplier' => $request->Supplier
        ]);
        return redirect('info')->with('status', 'Pesanan Telah Terkirim!');
    }
    public function delorder($id)
    {
        DB::table('inform')->where('id', $id)->delete();
        return redirect('info')->with('status', 'Pesanan Berhasil Dikonfirmasi!');
    }
}
