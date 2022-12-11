<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hunian extends Model
{
    use HasFactory;
    protected $fillable = ['gambar', 'nama', 'lokasi', 'harga', 'jumlah_kamar_tidur', 'jumlah_kamar_mandi', 'user_id'];
    // protected $table = 'hunian';

    public function transaksi()
    {
        return $this->hasOne(Transaksi::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
