<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Models\Cin;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResepController extends Controller
{
    public function inforesep()
    {
        $inforesep = DB::table('infopres')->get();
        return view('pharmacy.inforesep', compact('inforesep'));
    }
    
    public function inforesepdetails($id)
    {
         $inforesepdetails = DB::table('infopres')->where('id', $id)->get();
         $patient  = patient::where('id', $id)->get();
        
        return view('pharmacy.inforesepdetails', [
            'inforesepdetails' => $inforesepdetails,
            'patient'=> $patient,
        ]);
    }
    
    

    public function addpres()
    {
        $obat= DB::table('orders')->pluck('Nama_Obat');
        $patients = Patient::all();
        $doctors = Doctor::all();

        return view('pharmacy.addpres',[
            'patients' => $patients,
            'doctors' => $doctors,
            'obat' => $obat,
        ]);
    }
    public function presenter(Request $request)
    {


        DB::table('infopres')->insert([
            'Doctors' => $request->Doctors,
            'Patients' => $request->Patients,
            'Obat_1' => $request->Obat_1,
            'Dosis_Obat_1' => $request->Dosis_Obat_1,
            'Obat_2' => $request->Obat_2,
            'Dosis_Obat_2' => $request->Dosis_Obat_2,
            'Obat_3' => $request->Obat_3,
            'Dosis_Obat_3' => $request->Dosis_Obat_3,
            'Obat_4' => $request->Obat_4,
            'Dosis_Obat_4' => $request->Dosis_Obat_4,
            'Obat_5' => $request->Obat_5,
            'Dosis_Obat_5' => $request->Dosis_Obat_5,
        ]);
        return redirect('inforesep')->with('status', 'Informasi Telah Ditambah!');
    }
    public function editpres($id)
    {
        $obat= DB::table('orders')->pluck('Nama_Obat');
        $patients = Patient::all();
        $doctors = Doctor::all();
        $edited = DB::table('infopres')->where('id', $id)->first();
        return view('pharmacy.editpres', compact('edited'),[
            'patients' => $patients,
            'doctors' => $doctors,
            'obat' => $obat,
            ]);
            
    }
    public function editpresenter(Request $request, $id)
    {
        $patients = Patient::all();
        $doctors = Doctor::all();
        
        DB::table('infopres')->where('id', $id)
            ->update([
            'Doctors' => $request->Doctors,
            'Patients' => $request->Patients,
            'Obat_1' => $request->Obat_1,
            'Dosis_Obat_1' => $request->Dosis_Obat_1,
            'Obat_2' => $request->Obat_2,
            'Dosis_Obat_2' => $request->Dosis_Obat_2,
            'Obat_3' => $request->Obat_3,
            'Dosis_Obat_3' => $request->Dosis_Obat_3,
            'Obat_4' => $request->Obat_4,
            'Dosis_Obat_4' => $request->Dosis_Obat_4,
            'Obat_5' => $request->Obat_5,
            'Dosis_Obat_5' => $request->Dosis_Obat_5,
            ]);
        return redirect('inforesep')->with('status', 'Data Berhasil Diperbaharui!');
    }
    public function delpres($id)
    {
        DB::table('infopres')->where('id', $id)->delete();
        return redirect('inforesep')->with('status', 'Data Berhasil Dihapus!');
    }
}
