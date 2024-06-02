<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'laporans';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'nama_pelapor',
        'gender_pelapor',
        'no_iden_pelapor',
        'prodi_pelapor',
        'no_hp_pelapor',
        'email_pelapor',
        'nama_korban',
        'gender_korban',
        'no_iden_korban',
        'prodi_korban',
        'no_hp_korban',
        'email_korban',
        'perihal',
        'lokasi_kejadian',
        'deskripsi_kejadian',
        'tgl_waktu_kejadian',
        'image',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */


    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

}