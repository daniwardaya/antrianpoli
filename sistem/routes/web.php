<?php

use App\Http\Controllers\PasienPoliObginController;
use App\Http\Controllers\PasienPoliAnakController;
use App\Http\Controllers\PasienPoliBedahController;
use App\Http\Controllers\PasienPoliFisioController;
use App\Http\Controllers\PasienPoliGigiController;
use App\Http\Controllers\PasienPoliJantungController;
use App\Http\Controllers\PasienPoliJiwaController;
use App\Http\Controllers\PasienPoliKulitController;
use App\Http\Controllers\PasienPoliMataController;
use App\Http\Controllers\PasienPoliParuController;
use App\Http\Controllers\PasienPoliRehabilitasiMedikController;
use App\Http\Controllers\PasienPoliSyarafController;
use App\Http\Controllers\PasienPoliTHTController;
use App\Http\Controllers\PasienPoliBedahDanJiwaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/panggil-obgin', function () {
    return view('pemanggilan.obgin');
});
Route::get('dataAntrianObgin', [PasienPoliObginController::class, 'dataAntrianObgin'])->name('dataAntrianObgin');
Route::POST('panggilAntrianObgin', [PasienPoliObginController::class, 'panggilAntrianObgin'])->name('panggilAntrianObgin');
Route::get('dashboardObgin', [PasienPoliObginController::class, 'dashboardObgin'])->name('dashboardObgin');
Route::get('dashboardObgin2', [PasienPoliObginController::class, 'dashboardObgin2'])->name('dashboardObgin2');
Route::POST('selesaiAntrianObgin', [PasienPoliObginController::class, 'selesaiAntrianObgin'])->name('selesaiAntrianObgin');
Route::get('getAntrianObgin', [PasienPoliObginController::class, 'getAntrianObgin'])->name('getAntrianObgin');
Route::get('getAntrianObgin2', [PasienPoliObginController::class, 'getAntrianObgin2'])->name('getAntrianObgin2');

Route::get('/panggil-anak', function () {
    return view('pemanggilan.anak');
});
Route::get('dataAntrianAnak', [PasienPoliAnakController::class, 'dataAntrianAnak'])->name('dataAntrianAnak');
Route::POST('panggilAntrianAnak', [PasienPoliAnakController::class, 'panggilAntrianAnak'])->name('panggilAntrianAnak');
Route::get('dashboardAnak', [PasienPoliAnakController::class, 'dashboardAnak'])->name('dashboardAnak');
Route::get('dashboardAnak2', [PasienPoliAnakController::class, 'dashboardAnak2'])->name('dashboardAnak2');
Route::POST('selesaiAntrianAnak', [PasienPoliAnakController::class, 'selesaiAntrianAnak'])->name('selesaiAntrianAnak');
Route::get('getAntrianAnak', [PasienPoliAnakController::class, 'getAntrianAnak'])->name('getAntrianAnak');
Route::get('getAntrianAnak2', [PasienPoliAnakController::class, 'getAntrianAnak2'])->name('getAntrianAnak2');

Route::get('/panggil-bedah', function () {
    return view('pemanggilan.bedah');
});
Route::get('dataAntrianBedah', [PasienPoliBedahController::class, 'dataAntrianBedah'])->name('dataAntrianBedah');
Route::POST('panggilAntrianBedah', [PasienPoliBedahController::class, 'panggilAntrianBedah'])->name('panggilAntrianBedah');
Route::get('dashboardBedah', [PasienPoliBedahController::class, 'dashboardBedah'])->name('dashboardBedah');
Route::get('dashboardBedah2', [PasienPoliBedahController::class, 'dashboardBedah2'])->name('dashboardBedah2');
Route::get('dashboardBedah3', [PasienPoliBedahController::class, 'dashboardBedah3'])->name('dashboardBedah3');
Route::POST('selesaiAntrianBedah', [PasienPoliBedahController::class, 'selesaiAntrianBedah'])->name('selesaiAntrianBedah');
Route::get('getAntrianBedah', [PasienPoliBedahController::class, 'getAntrianBedah'])->name('getAntrianBedah');
Route::get('getAntrianBedah2', [PasienPoliBedahController::class, 'getAntrianBedah2'])->name('getAntrianBedah2');
Route::get('getAntrianBedah3', [PasienPoliBedahController::class, 'getAntrianBedah3'])->name('getAntrianBedah3');

Route::get('/panggil-fisio', function () {
    return view('pemanggilan.fisio');
});
Route::get('dataAntrianFisio', [PasienPoliFisioController::class, 'dataAntrianFisio'])->name('dataAntrianFisio');
Route::POST('panggilAntrianFisio', [PasienPoliFisioController::class, 'panggilAntrianFisio'])->name('panggilAntrianFisio');
Route::get('dashboardFisio', [PasienPoliFisioController::class, 'dashboardFisio'])->name('dashboardFisio');
Route::get('dashboardFisio2', [PasienPoliFisioController::class, 'dashboardFisio2'])->name('dashboardFisio2');
Route::POST('selesaiAntrianFisio', [PasienPoliFisioController::class, 'selesaiAntrianFisio'])->name('selesaiAntrianFisio');
Route::get('getAntrianFisio', [PasienPoliFisioController::class, 'getAntrianFisio'])->name('getAntrianFisio');
Route::get('getAntrianFisio2', [PasienPoliFisioController::class, 'getAntrianFisio2'])->name('getAntrianFisio2');

Route::get('/panggil-gigi', function () {
    return view('pemanggilan.gigi');
});
Route::get('dataAntrianGigi', [PasienPoliGigiController::class, 'dataAntrianGigi'])->name('dataAntrianGigi');
Route::POST('panggilAntrianGigi', [PasienPoliGigiController::class, 'panggilAntrianGigi'])->name('panggilAntrianGigi');
Route::get('dashboardGigi', [PasienPoliGigiController::class, 'dashboardGigi'])->name('dashboardGigi');
Route::get('dashboardGigi2', [PasienPoliGigiController::class, 'dashboardGigi2'])->name('dashboardGigi2');
Route::POST('selesaiAntrianGigi', [PasienPoliGigiController::class, 'selesaiAntrianGigi'])->name('selesaiAntrianGigi');
Route::get('getAntrianGigi', [PasienPoliGigiController::class, 'getAntrianGigi'])->name('getAntrianGigi');
Route::get('getAntrianGigi2', [PasienPoliGigiController::class, 'getAntrianGigi2'])->name('getAntrianGigi2');

Route::get('/panggil-jantung', function () {
    return view('pemanggilan.jantung');
});
Route::get('dataAntrianJantung', [PasienPoliJantungController::class, 'dataAntrianJantung'])->name('dataAntrianJantung');
Route::POST('panggilAntrianJantung', [PasienPoliJantungController::class, 'panggilAntrianJantung'])->name('panggilAntrianJantung');
Route::get('dashboardJantung', [PasienPoliJantungController::class, 'dashboardJantung'])->name('dashboardJantung');
Route::get('dashboardJantung2', [PasienPoliJantungController::class, 'dashboardJantung2'])->name('dashboardJantung2');
Route::POST('selesaiAntrianJantung', [PasienPoliJantungController::class, 'selesaiAntrianJantung'])->name('selesaiAntrianJantung');
Route::get('getAntrianJantung', [PasienPoliJantungController::class, 'getAntrianJantung'])->name('getAntrianJantung');
Route::get('getAntrianJantung2', [PasienPoliJantungController::class, 'getAntrianJantung2'])->name('getAntrianJantung2');

Route::get('/panggil-jiwa', function () {
    return view('pemanggilan.jiwa');
});
Route::get('dataAntrianJiwa', [PasienPoliJiwaController::class, 'dataAntrianJiwa'])->name('dataAntrianJiwa');
Route::POST('panggilAntrianJiwa', [PasienPoliJiwaController::class, 'panggilAntrianJiwa'])->name('panggilAntrianJiwa');
Route::get('dashboardJiwa', [PasienPoliJiwaController::class, 'dashboardJiwa'])->name('dashboardJiwa');
Route::get('dashboardJiwa2', [PasienPoliJiwaController::class, 'dashboardJiwa2'])->name('dashboardJiwa2');
Route::POST('selesaiAntrianJiwa', [PasienPoliJiwaController::class, 'selesaiAntrianJiwa'])->name('selesaiAntrianJiwa');
Route::get('getAntrianJiwa', [PasienPoliJiwaController::class, 'getAntrianJiwa'])->name('getAntrianJiwa');
Route::get('getAntrianJiwa2', [PasienPoliJiwaController::class, 'getAntrianJiwa2'])->name('getAntrianJiwa2');

Route::get('/panggil-kulit', function () {
    return view('pemanggilan.kulit');
});
Route::get('dataAntrianKulit', [PasienPoliKulitController::class, 'dataAntrianKulit'])->name('dataAntrianKulit');
Route::POST('panggilAntrianKulit', [PasienPoliKulitController::class, 'panggilAntrianKulit'])->name('panggilAntrianKulit');
Route::get('dashboardKulit', [PasienPoliKulitController::class, 'dashboardKulit'])->name('dashboardKulit');
Route::get('dashboardKulit2', [PasienPoliKulitController::class, 'dashboardKulit2'])->name('dashboardKulit2');
Route::POST('selesaiAntrianKulit', [PasienPoliKulitController::class, 'selesaiAntrianKulit'])->name('selesaiAntrianKulit');
Route::get('getAntrianKulit', [PasienPoliKulitController::class, 'getAntrianKulit'])->name('getAntrianKulit');
Route::get('getAntrianKulit2', [PasienPoliKulitController::class, 'getAntrianKulit2'])->name('getAntrianKulit2');

Route::get('/panggil-mata', function () {
    return view('pemanggilan.mata');
});
Route::get('dataAntrianMata', [PasienPoliMataController::class, 'dataAntrianMata'])->name('dataAntrianMata');
Route::POST('panggilAntrianMata', [PasienPoliMataController::class, 'panggilAntrianMata'])->name('panggilAntrianMata');
Route::get('dashboardMata', [PasienPoliMataController::class, 'dashboardMata'])->name('dashboardMata');
Route::get('dashboardMata2', [PasienPoliMataController::class, 'dashboardMata2'])->name('dashboardMata2');
Route::POST('selesaiAntrianMata', [PasienPoliMataController::class, 'selesaiAntrianMata'])->name('selesaiAntrianMata');
Route::get('getAntrianMata', [PasienPoliMataController::class, 'getAntrianMata'])->name('getAntrianMata');
Route::get('getAntrianMata2', [PasienPoliMataController::class, 'getAntrianMata2'])->name('getAntrianMata2');

Route::get('/panggil-paru', function () {
    return view('pemanggilan.paru');
});
Route::get('dataAntrianParu', [PasienPoliParuController::class, 'dataAntrianParu'])->name('dataAntrianParu');
Route::POST('panggilAntrianParu', [PasienPoliParuController::class, 'panggilAntrianParu'])->name('panggilAntrianParu');
Route::get('dashboardParu', [PasienPoliParuController::class, 'dashboardParu'])->name('dashboardParu');
Route::get('dashboardParu2', [PasienPoliParuController::class, 'dashboardParu2'])->name('dashboardParu2');
Route::POST('selesaiAntrianParu', [PasienPoliParuController::class, 'selesaiAntrianParu'])->name('selesaiAntrianParu');
Route::get('getAntrianParu', [PasienPoliParuController::class, 'getAntrianParu'])->name('getAntrianParu');
Route::get('getAntrianParu2', [PasienPoliParuController::class, 'getAntrianParu2'])->name('getAntrianParu2');

Route::get('/panggil-rehabilitasiMedik', function () {
    return view('pemanggilan.rehabilitasiMedik');
});
Route::get('dataAntrianRehabilitasiMedik', [PasienPoliRehabilitasiMedikController::class, 'dataAntrianRehabilitasiMedik'])->name('dataAntrianRehabilitasiMedik');
Route::POST('panggilAntrianRehabilitasiMedik', [PasienPoliRehabilitasiMedikController::class, 'panggilAntrianRehabilitasiMedik'])->name('panggilAntrianRehabilitasiMedik');
Route::get('dashboardRehabilitasiMedik', [PasienPoliRehabilitasiMedikController::class, 'dashboardRehabilitasiMedik'])->name('dashboardRehabilitasiMedik');
Route::get('dashboardRehabilitasiMedik2', [PasienPoliRehabilitasiMedikController::class, 'dashboardRehabilitasiMedik2'])->name('dashboardRehabilitasiMedik2');
Route::POST('selesaiAntrianRehabilitasiMedik', [PasienPoliRehabilitasiMedikController::class, 'selesaiAntrianRehabilitasiMedik'])->name('selesaiAntrianRehabilitasiMedik');
Route::get('getAntrianRehabilitasiMedik', [PasienPoliRehabilitasiMedikController::class, 'getAntrianRehabilitasiMedik'])->name('getAntrianRehabilitasiMedik');
Route::get('getAntrianRehabilitasiMedik2', [PasienPoliRehabilitasiMedikController::class, 'getAntrianRehabilitasiMedik2'])->name('getAntrianRehabilitasiMedik2');

Route::get('/panggil-syaraf', function () {
    return view('pemanggilan.syaraf');
});
Route::get('dataAntrianSyaraf', [PasienPoliSyarafController::class, 'dataAntrianSyaraf'])->name('dataAntrianSyaraf');
Route::POST('panggilAntrianSyaraf', [PasienPoliSyarafController::class, 'panggilAntrianSyaraf'])->name('panggilAntrianSyaraf');
Route::get('dashboardSyaraf', [PasienPoliSyarafController::class, 'dashboardSyaraf'])->name('dashboardSyaraf');
Route::get('dashboardSyaraf2', [PasienPoliSyarafController::class, 'dashboardSyaraf2'])->name('dashboardSyaraf2');
Route::POST('selesaiAntrianSyaraf', [PasienPoliSyarafController::class, 'selesaiAntrianSyaraf'])->name('selesaiAntrianSyaraf');
Route::get('getAntrianSyaraf', [PasienPoliSyarafController::class, 'getAntrianSyaraf'])->name('getAntrianSyaraf');
Route::get('getAntrianSyaraf2', [PasienPoliSyarafController::class, 'getAntrianSyaraf2'])->name('getAntrianSyaraf2');

Route::get('/panggil-tht', function () {
    return view('pemanggilan.tht');
});
Route::get('dataAntrianTHT', [PasienPoliTHTController::class, 'dataAntrianTHT'])->name('dataAntrianTHT');
Route::POST('panggilAntrianTHT', [PasienPoliTHTController::class, 'panggilAntrianTHT'])->name('panggilAntrianTHT');
Route::get('dashboardTHT', [PasienPoliTHTController::class, 'dashboardTHT'])->name('dashboardTHT');
Route::get('dashboardTHT2', [PasienPoliTHTController::class, 'dashboardTHT2'])->name('dashboardTHT2');
Route::POST('selesaiAntrianTHT', [PasienPoliTHTController::class, 'selesaiAntrianTHT'])->name('selesaiAntrianTHT');
Route::get('getAntrianTHT', [PasienPoliTHTController::class, 'getAntrianTHT'])->name('getAntrianTHT');
Route::get('getAntrianTHT2', [PasienPoliTHTController::class, 'getAntrianTHT2'])->name('getAntrianTHT2');


Route::get('getAntrianBedahDanJiwa', [PasienPoliBedahDanJiwaController::class, 'getAntrianBedahDanJiwa'])->name('getAntrianBedahDanJiwa');
Route::get('dashboardBedahDanJiwa', [PasienPoliBedahDanJiwaController::class, 'dashboardBedahDanJiwa'])->name('dashboardBedahDanJiwa');

Route::get('/listDashboard', function () {
    return view('dashboard.landingPage',
    [
        'nama_poli' => 'LIST DASHBOARD POLIKLINIK',
    ]);
});

Route::get('/listPemanggilan', function () {
    return view('dashboard.pemanggilan',
    [
        'nama_poli' => 'LIST PEMANGGILAN POLIKLINIK',
    ]);
});
Route::get('/', function () {
    return view('dashboard.home',
    [
        'nama_poli' => 'SIPP',
    ]);
});