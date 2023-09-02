<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\PanggilAntrianModel;
use Illuminate\Http\Request;

class PasienPoliBedahDanjiwaController extends Controller
{
    public function dashboardBedahDanJiwa(){
        
      

        

        return view('dashboard.dashboardBedahDanJiwa',[

            'nama_poli' => 'POLIKLINIK KANDUNGAN & JIWA',
        ]);
    }

    // public function getAntrianBedahDanJiwa()
    // {

    //     $today = Carbon::now()->format('Y-m-d');

    //     $nama_dokter_jiwa = DB::table('dashboard_poli')
    //         ->where('status','dipanggil')
    //         ->where('tgl_registrasi', $today)
    //         ->where('kd_poli', 'JIW')
    //         ->value('nama_dokter');

    //     $no_antrian_jiwa = DB::table('dashboard_poli')
    //     ->where('status','dipanggil')
    //     ->where('tgl_registrasi', $today)
    //     ->where('kd_poli', 'JIW')
    //     ->value('no_reg');

    //     $nm_pasien_jiwa = DB::table('dashboard_poli')
    //     ->where('status','dipanggil')
    //     ->where('tgl_registrasi', $today)
    //     ->where('kd_poli', 'JIW')
    //     ->value('no_rawat');

    //     $nama_dokter_bedah = DB::table('dashboard_poli')
    //         ->where('status','dipanggil')
    //         ->where('tgl_registrasi', $today)
    //         ->where('kd_poli', 'BED')
    //         ->value('nama_dokter');

    //     $no_antrian_bedah = DB::table('dashboard_poli')
    //     ->where('status','dipanggil')
    //     ->where('tgl_registrasi', $today)
    //     ->where('kd_poli', 'BED')
    //     ->value('no_reg');

    //     $nm_pasien_bedah = DB::table('dashboard_poli')
    //     ->where('status','dipanggil')
    //     ->where('tgl_registrasi', $today)
    //     ->where('kd_poli', 'BED')
    //     ->value('no_rawat');

    //     return response()->json([
    //         'nama_dokter_jiwa' => $nama_dokter_jiwa,
    //         'no_antrian_jiwa' => $no_antrian_jiwa,
    //         'nm_pasien_jiwa' => $nm_pasien_jiwa,
    //         'nama_dokter_bedah' => $nama_dokter_bedah,
    //         'no_antrian_bedah' => $no_antrian_bedah,
    //         'nm_pasien_bedah' => $nm_pasien_bedah,
    //     ]);
    // }

    public function getAntrianBedahDanJiwa()
    {

        $today = Carbon::now()->format('Y-m-d');

        $nama_dokter_jiwa = DB::table('dashboard_poli')
            ->where('status','dipanggil')
            ->where('tgl_registrasi', $today)
            ->where('kd_poli', 'JIW')
            ->value('nama_dokter');

        $no_antrian_jiwa = DB::table('dashboard_poli')
        ->where('status','dipanggil')
        ->where('tgl_registrasi', $today)
        ->where('kd_poli', 'JIW')
        ->value('no_reg');

        $nm_pasien_jiwa = DB::table('dashboard_poli')
        ->where('status','dipanggil')
        ->where('tgl_registrasi', $today)
        ->where('kd_poli', 'JIW')
        ->value('no_rawat');

        $nama_dokter_bedah = DB::table('dashboard_poli')
            ->where('status','dipanggil')
            ->where('tgl_registrasi', $today)
            ->where('kd_poli', 'OBG')
            ->value('nama_dokter');

        $no_antrian_bedah = DB::table('dashboard_poli')
        ->where('status','dipanggil')
        ->where('tgl_registrasi', $today)
        ->where('kd_poli', 'OBG')
        ->value('no_reg');

        $nm_pasien_bedah = DB::table('dashboard_poli')
        ->where('status','dipanggil')
        ->where('tgl_registrasi', $today)
        ->where('kd_poli', 'OBG')
        ->value('no_rawat');

        return response()->json([
            'nama_dokter_jiwa' => $nama_dokter_jiwa,
            'no_antrian_jiwa' => $no_antrian_jiwa,
            'nm_pasien_jiwa' => $nm_pasien_jiwa,
            'nama_dokter_bedah' => $nama_dokter_bedah,
            'no_antrian_bedah' => $no_antrian_bedah,
            'nm_pasien_bedah' => $nm_pasien_bedah,
        ]);
    }
}
