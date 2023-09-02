<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\PanggilAntrianModel;
use Illuminate\Http\Request;


class PasienPoliParuController extends Controller
{
    public function dataAntrianParu(){
        $today = Carbon::now()->format('Y-m-d');
        
        $dataAntrianParu = DB::table('reg_periksa')
            ->join('poliklinik', 'reg_periksa.kd_poli', '=', 'poliklinik.kd_poli') 
            ->join('pegawai', 'reg_periksa.kd_dokter', '=', 'pegawai.nik') 
            ->join('pasien', 'reg_periksa.no_rkm_medis', '=', 'pasien.no_rkm_medis')  
            ->where('reg_periksa.kd_poli', 'PAR') 
            ->where('tgl_registrasi', $today)
            ->get();

        return DataTables::of($dataAntrianParu)
            ->make(true);
    }
    
    public function panggilAntrianParu(Request $request)
    {
        $today = Carbon::now()->format('Y-m-d');
        $no_reg = $request->input('no_reg');
        $kd_poli = $request->input('kd_poli');
        $nama_dokter = $request->input('nama');
        $no_rawat = $request->input('no_rawat');
        $status = 'dipanggil';
        $tgl_registrasi = $today;
        $panggilAntrian = new PanggilAntrianModel;

        // Memeriksa baris-baris data sebelumnya dalam database dengan status 'dipanggil'
        $previousRecords = PanggilAntrianModel::where('status', 'dipanggil')
        ->where('nama_dokter', $nama_dokter)
        ->get();

        // Mengubah status pada baris-baris data sebelumnya menjadi 'tunda'
        foreach ($previousRecords as $previousRecord) {
            $previousRecord->status = 'tunda';
            $previousRecord->save();
        }
        
        $panggilAntrian->no_reg = $no_reg;
        $panggilAntrian->kd_poli = $kd_poli;
        $panggilAntrian->nama_dokter = $nama_dokter;
        $panggilAntrian->no_rawat = $no_rawat;
        $panggilAntrian->status = $status;
        $panggilAntrian->tgl_registrasi = $tgl_registrasi;

        if ($panggilAntrian->save()) {
            return response()->json(['message' => 'Data berhasil disimpan.']);
        } else {
            return response()->json(['message' => 'Gagal menyimpan data.'], 500);
        }
    }

    public function selesaiAntrianParu(Request $request){
        $no_reg = $request->input('no_reg');
        $kd_poli = $request->input('kd_poli');
        $nama_dokter = $request->input('nama');
        $status = 'selesai';
        
        $updatedRows = panggilAntrianModel::where('no_reg', $no_reg)
            ->where('kd_poli', $kd_poli)
            ->where('nama_dokter', $nama_dokter)
            ->update(['status' => $status]);
        
        if ($updatedRows > 0) {
            return response()->json(['message' => 'Status berhasil diubah menjadi selesai pada ' . $updatedRows . ' baris data.']);
        } else {
            return response()->json(['message' => 'Data tidak ditemukan.'], 404);
        }
    }

    public function dashboardParu(){

        return view('dashboard.dashboardParu',[

            'nama_poli' => 'POLIKLINIK PARU',
        ]);
    }
    public function dashboardParu2(){

        return view('dashboard.dashboardParu2',[

            'nama_poli' => 'POLIKLINIK PARU',
        ]);
    }

    public function getAntrianParu()
    {

        $today = Carbon::now()->format('Y-m-d');

        $nama_dokter = DB::table('dashboard_poli')
            ->where('status','dipanggil')
            ->where('tgl_registrasi', $today)
            ->where('kd_poli', 'PAR')
            ->where('nama_dokter','dr. Gilang Muhammad S.N., Sp. P')          
            ->value('nama_dokter');

        $no_antrian = DB::table('dashboard_poli')
        ->where('status','dipanggil')
        ->where('tgl_registrasi', $today)
        ->where('kd_poli', 'PAR')
        ->where('nama_dokter','dr. Gilang Muhammad S.N., Sp. P')
        ->value('no_reg');

        $nm_pasien = DB::table('dashboard_poli')
        ->where('status','dipanggil')
        ->where('tgl_registrasi', $today)
        ->where('kd_poli', 'PAR')
        ->where('nama_dokter','dr. Gilang Muhammad S.N., Sp. P')
        ->value('no_rawat');

        return response()->json([
            'nama_dokter' => $nama_dokter,
            'no_antrian' => $no_antrian,
            'nm_pasien' => $nm_pasien,
        ]);
    }
    
}
