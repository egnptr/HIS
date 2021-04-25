<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TebusController extends Controller
{
    public function inforan()
    {
        $inforan = DB::table('infotebus')->get();
        //$inforan = DB::table('infopres')->get();
        $inforan = DB::table('infotebus')
            ->join('infotebus','infotebus.id = infopres.id')
            ->select('infotebus.*,infopres.Doctors as Doctors')
            ->get();
        return view('pharmacy.inforan', compact('inforan'));
    }

    //public function addtebus()
    //{
     //   return view('pharmacy.addtebus');
   // }
   // public function tebusenter(Request $request)
   // {
      //  DB::table('infotebus')->insert([
           // 'Nomor_Pasien' => $request->Nomor_Pasien,
          //  'Nama_Pasien' => $request->Nama_Pasien,
           // 'Keterangan_Penebusan' => $request->Keterangan_Penebusan,
           // 'Resep_Obat' => $request->Resep_Obat,
           // 'Total_Harga' => $request->Total_Harga,
       // ]);
      //  return redirect('inforan')->with('status', 'Informasi Telah Ditambah!');
   // }
   // public function edittebus($id)
   // {
      //  $edited = DB::table('infotebus')->where('id', $id)->first();
      //  return view('pharmacy.edittebus', compact('edited'));  
    //}
   // public function edittebusenter(Request $request, $id)
    //{
//DB::table('infotebus')->where('id', $id)
       //     ->update([
     //           'Nomor_Pasien' => $request->Nomor_Pasien,
      //          'Nama_Pasien' => $request->Nama_Pasien,
       //         'Keterangan_Penebusan' => $request->Keterangan_Penebusan,
      //          'Resep_Obat' => $request->Resep_Obat,
     //           'Total_Harga' => $request->Total_Harga,
     //       ]);
    //    return redirect('inforan')->with('status', 'Data Berhasil Diperbaharui!');
   // }
   // public function deltebus($id)
  //  {
    //    DB::table('infotebus')->where('id', $id)->delete();
    //    return redirect('inforan')->with('status', 'Data Berhasil Dihapus!');
  //  }
}