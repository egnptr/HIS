<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Models\Cin;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TebusController extends Controller

   {
    public function inforan()
    {
        $inforan = DB::table('infopres')->get();
        return view('pharmacy.inforan', compact('inforan'));
    }
    
    public function infotebusdetails($id)
    {   
         $infotebusdetails = DB::table('infopres')->where('id', $id)->get();
         
         $patient  = patient::where('id', $id)->get();
         
         $harga1 = DB::table('infopres')->where('id', $id)->pluck('Harga_Obat_1');
        
         $harga2 = DB::table('infopres')->where('id', $id)->pluck('Harga_Obat_2');
         
         $harga3 = DB::table('infopres')->where('id', $id)->pluck('Harga_Obat_3');
         
         $harga4 = DB::table('infopres')->where('id', $id)->pluck('Harga_Obat_4');
         
         $harga5 = DB::table('infopres')->where('id', $id)->pluck('Harga_Obat_5');
         
         $jumlah1= DB::table('infopres')->where('id', $id)->pluck('Dosis_Obat_1');
         
         $jumlah2= DB::table('infopres')->where('id', $id)->pluck('Dosis_Obat_2');
         
         $jumlah3= DB::table('infopres')->where('id', $id)->pluck('Dosis_Obat_3');
         
         $jumlah4= DB::table('infopres')->where('id', $id)->pluck('Dosis_Obat_4');
         
         $jumlah5= DB::table('infopres')->where('id', $id)->pluck('Dosis_Obat_5');
         
         $total=0;
         
           
    foreach($harga1 as $key=>$value)
    {
                    
        $hargas1=$value;
        
        
    }
    
    foreach($harga2 as $key=>$value)
    {
                    
        $hargas2=$value;
                
    }
    
    foreach($harga3 as $key=>$value)
    {
                    
        $hargas3=$value;
                
    }
    
    foreach($harga4 as $key=>$value)
    {
                    
        $hargas4=$value;
                
    }
    foreach($harga5 as $key=>$value)
    {
                    
        $hargas5=$value;
                
    }

        foreach($jumlah1 as $key=>$value)
    {
                    
        $jumlahs1=$value;
        
                
    }   
        foreach($jumlah2 as $key=>$value)
    {
                    
        $jumlahs2=$value;
                
    }
        foreach($jumlah3 as $key=>$value)
    {
                    
        $jumlahs3=$value;
                
    }
        
        foreach($jumlah4 as $key=>$value)
    {
                    
        $jumlahs4=$value;
                
    }
        foreach($jumlah5 as $key=>$value)
    {
                    
        $jumlahs5=$value;
                
    }
    
    
    
        $sum1= $hargas1 * $jumlahs1;
        
        
        $sum2= $hargas2 * $jumlahs2;
    
        
        $sum3= $hargas3 * $jumlahs3;
         
         
        $sum4= $hargas4 * $jumlahs4;
         
         
        $sum5= $hargas5 * $jumlahs5;
        
        $total = $total + $sum1 + $sum2 + $sum3 + $sum4 + $sum5;
        
        
    
         
         
         
         
         
        
        return view('pharmacy.infotebusdetails', [
            'infotebusdetails' => $infotebusdetails,
            'patient'=> $patient,
            'harga1'=> $harga1,
            'harga2'=> $harga2,
            'harga3'=> $harga3,
            'harga4'=> $harga4,
            'harga5'=> $harga5,
            'jumlah1'=>$jumlah1,
            'jumlah2'=>$jumlah2,
            'jumlah3'=>$jumlah3,
            'jumlah4'=>$jumlah4,
            'jumlah5'=>$jumlah5,
            'sum1'=>$sum1,
            'sum2'=>$sum2,
            'sum3'=>$sum3,
            'sum4'=>$sum4,
            'sum5'=>$sum5,
            'total'=>$total,
        ]);
    }
    
    public function edittebus($id)
    { 
        
       
        $obat= DB::table('orders')->pluck('Nama_Obat');
        $harga1=DB::table('infopres')
        ->join('orders','infopres.obat_1','=','orders.Nama_Obat')
        ->where('infopres.id', $id )
        ->value('orders.Harga_jual');
        $harga2=DB::table('infopres')
        ->join('orders','infopres.obat_2','=','orders.Nama_Obat')
        ->where('infopres.id', $id )
        ->value('orders.Harga_jual');
        $harga3=DB::table('infopres')
        ->join('orders','infopres.obat_3','=','orders.Nama_Obat')
        ->where('infopres.id', $id )
        ->value('orders.Harga_jual');
        $harga4=DB::table('infopres')
        ->join('orders','infopres.obat_4','=','orders.Nama_Obat')
        ->where('infopres.id', $id )
        ->value('orders.Harga_jual');
        $harga5=DB::table('infopres')
        ->join('orders','infopres.obat_5','=','orders.Nama_Obat')
        ->where('infopres.id', $id )
        ->value('orders.Harga_jual');
        
        
        
        
        
        $jumlah1= DB::table('infopres')->where('id', $id)->pluck('Dosis_Obat_1');
        $jumlah2= DB::table('infopres')->where('id', $id)->pluck('Dosis_Obat_2');
        $jumlah3= DB::table('infopres')->where('id', $id)->pluck('Dosis_Obat_3');
        $jumlah4= DB::table('infopres')->where('id', $id)->pluck('Dosis_Obat_4');
        $jumlah5= DB::table('infopres')->where('id', $id)->pluck('Dosis_Obat_5');
        
        $stock= DB::table('orders')->where('id', $id)->pluck('Jumlah');
        
        
        
        
        
        $patients = Patient::all();
        $doctors = Doctor::all();
        $edited = DB::table('infopres')->where('id', $id)->first();
        
        return view('pharmacy.edittebus', compact('edited'),[
            'patients' => $patients,
            'doctors' => $doctors,
            'obat' => $obat,
            'harga1'=>$harga1,
            'harga2'=>$harga2,
            'harga3'=>$harga3,
            'harga4'=>$harga4,
            'harga5'=>$harga5,
            ]);
            
    }
    
    public function edittebusenter(Request $request, $id)
    {
        $obat= DB::table('orders')->pluck('Nama_Obat');
        //$harga1=DB::table('infopres')
        //->join('orders','infopres.obat_1','=','orders.Nama_Obat')
        //->select('orders.Harga_jual')
       // ->get();
        
        $patients = Patient::all();
        $doctors = Doctor::all();
        
        DB::table('infopres')->where('id', $id)
        
            ->update ([
            'Obat_1' => $request->Obat_1,
            'Dosis_Obat_1' => $request->Dosis_Obat_1,
            'Harga_Obat_1' => $request->Harga_Obat_1,
            'Obat_2' => $request->Obat_2,
            'Dosis_Obat_2' => $request->Dosis_Obat_2,
            'Harga_Obat_2' => $request->Harga_Obat_2,
            'Obat_3' => $request->Obat_3,
            'Dosis_Obat_3' => $request->Dosis_Obat_3,
            'Harga_Obat_3' => $request->Harga_Obat_3,
            'Obat_4' => $request->Obat_4,
            'Dosis_Obat_4' => $request->Dosis_Obat_4,
            'Harga_Obat_4' => $request->Harga_Obat_4,
            'Obat_5' => $request->Obat_5,
            'Dosis_Obat_5' => $request->Dosis_Obat_5,
            'Harga_Obat_5' => $request->Harga_Obat_5,
            'Total_Harga' => $request->Total_Harga,
            ]);
     
        
        $oldstock1= DB::table('orders')->where('Nama_Obat','=',$request->Obat_1 )
                    ->pluck('Jumlah');
                    
          if ($oldstock1==null)
          {
              
              $oldstock1 = 0;

          }
        
    foreach($oldstock1 as $key=>$value)
    {
                    
        $oldstocks1=$value;
                
    }
                    
        $newstock1 = $oldstocks1 - $request->Dosis_Obat_1;
        
        
        
        
        
        $oldstock2= DB::table('orders')->where('Nama_Obat','=',$request->Obat_2 )
                    ->pluck('Jumlah');
            
                    
                    
                    
                      if($oldstock2->isEmpty())
          {
              
              $oldstock2 = 0;

          
          
        $newstock2 = $oldstock2 - $request->Dosis_Obat_2;
        
        }
        
        else{
            
        foreach($oldstock2 as $key=>$value)
    {
                    
        $oldstocks2=$value;
                
    }
    
        $newstock2 = $oldstocks2 - $request->Dosis_Obat_2;
        
        }
        
        
        
        
        
        $oldstock3= DB::table('orders')->where('Nama_Obat','=',$request->Obat_3 )
                    ->pluck('Jumlah');
                    
                       if($oldstock3->isEmpty())
          {
              
              $oldstock3 = 0;
              
              
                $newstock3 = $oldstock3 - $request->Dosis_Obat_3;
          }
          
          else{
            
        foreach($oldstock3 as $key=>$value)
    {
                    
        $oldstocks3=$value;
                
    }
    
        $newstock3 = $oldstocks3 - $request->Dosis_Obat_3;
        
        }
                    
          
        
    
                    
        
        
        
        
        
        $oldstock4= DB::table('orders')->where('Nama_Obat','=',$request->Obat_4 )
                    ->pluck('Jumlah');
                    
                          if($oldstock4->isEmpty())
          {
              
              $oldstock4 = 0;
              
              
                $newstock4 = $oldstock4 - $request->Dosis_Obat_4;
          }
          
          else{
            
        foreach($oldstock4 as $key=>$value)
    {
                    
        $oldstocks4=$value;
                
    }
    
        $newstock4 = $oldstocks4 - $request->Dosis_Obat_4;
        
        }
                    
          
        
    
                    
        
        
        
        
        
        $oldstock5= DB::table('orders')->where('Nama_Obat','=',$request->Obat_5 )
                    ->pluck('Jumlah');
                    
                         if($oldstock5->isEmpty())
          {
              
              $oldstock5 = 0;
              
              
              
                $newstock5 = $oldstock5 - $request->Dosis_Obat_5;
          }
          else{
            
        foreach($oldstock5 as $key=>$value)
    {
                    
        $oldstocks5=$value;
                
    }
    
        $newstock5 = $oldstocks5 - $request->Dosis_Obat_5;
        
        }
        
    
                    
        
        
        
        
        DB::table('orders')->where('Nama_Obat', $request->Obat_1)
        
            ->update ([
            
            'jumlah' => $newstock1,
            
            ]);
        
        
     
     
        return redirect('inforan')->with('status', 'Data Berhasil Diperbaharui!');
    }
    
    
    public function updatestock($id)
    {
         $stock1 = DB::table('infopres')->where('id', $id)->pluck('Dosis_Obat_1');
        
         $stock2 = DB::table('infopres')->where('id', $id)->pluck('Dosis_Obat_2');
         
         $stock3 = DB::table('infopres')->where('id', $id)->pluck('Dosis_Obat_3');
         
         $stock4 = DB::table('infopres')->where('id', $id)->pluck('Dosis_Obat_4');
         
         $stock5 = DB::table('infopres')->where('id', $id)->pluck('Dosis_Obat_5');
         
         
         
         
         
       
        
        
        
        
        
    }
    
    public function Updatestockers()
    {
        
        
        
        
        
    }
    
    

    
    
    public function deltebus($id)
    {
        DB::table('infopres')->where('id', $id)->delete();
        return redirect('inforan')->with('status', 'Data Berhasil Dihapus!');
    }
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
