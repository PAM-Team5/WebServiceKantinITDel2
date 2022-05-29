<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    
    protected $table = 'pemesanans';
    
    protected $fillable = ['nama', 'kategori','jumlah','status','hargaPcs','gambar','deskripsi','ID_User','ID_Product'];

}
