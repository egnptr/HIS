<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    public function orderdata()
    {
        $order = DB::table('orders')->get();
        
        //return $order;
        //return view('order.orderdata', ['order'=>$order]);
        return view('pharmacy.orderdata', compact('order'));
    }

    public function addmedicine()
    {
        return view('pharmacy.addmedicine');
    }
    public function addenter(Request $request)
    {
        DB::table('orders')->insert([
            'Nama_Farmasis' => $request->Nama_Farmasis,
            'Nama_Obat' => $request->Nama_Obat,
            'Jenis_Obat' => $request->Jenis_Obat,
            'Jumlah' => $request->Jumlah,
            'Harga_Beli' => $request->Harga_Beli,
            'Harga_Jual' => $request->Harga_Jual,
            'Supplier' => $request->Supplier,
            'Tanggal_Kadaluarsa' => $request->Tanggal_Kadaluarsa
        ]);
        return redirect('order')->with('status', 'Pesanan Telah Terkirim!');
    }
    public function editmedicine($id)
    {
        $edited = DB::table('orders')->where('id', $id)->first();
        return view('pharmacy.editmedicine', compact('edited'));  
    }
    public function editenter(Request $request, $id)
    {
        DB::table('orders')->where('id', $id)
            ->update([
            'Nama_Farmasis' => $request->Nama_Farmasis,
            'Nama_Obat' => $request->Nama_Obat,
            'Jenis_Obat' => $request->Jenis_Obat,
            'Jumlah' => $request->Jumlah,
            'Harga_Beli' => $request->Harga_Beli,
            'Harga_Jual' => $request->Harga_Jual,
            'Supplier' => $request->Supplier,
            'Tanggal_Kadaluarsa' => $request->Tanggal_Kadaluarsa
            ]);
        return redirect('order')->with('status', 'Data Berhasil Diperbaharui!');
    }
    public function delmedicine($id)
    {
        DB::table('orders')->where('id', $id)->delete();
        return redirect('order')->with('status', 'Data Berhasil Dihapus!');
    }
}
