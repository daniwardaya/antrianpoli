<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanggilAntrianModel extends Model
{
    use HasFactory;

    protected $table = 'dashboard_poli';
    protected $fillable = [
       
        'no_reg',
        'kd_poli',
        'status',
        'nama_dokter',
        'tgl_registrasi',
        'no_rawat',];
}
