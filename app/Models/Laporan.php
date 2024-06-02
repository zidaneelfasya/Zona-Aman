<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $guarded = ['id']; // ini boleh dikosongin kalo semua bisa diinsert secara massal

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

}