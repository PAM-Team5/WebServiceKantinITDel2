<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    
    protected $table = 'pemesanans';
    
    protected $fillable = ['nama', 'jenis', 'kategori','jumlah','status','harga','gambar','deskripsi'];

}
