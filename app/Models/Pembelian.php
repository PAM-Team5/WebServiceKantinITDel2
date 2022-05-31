<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembelians';
    
    protected $fillable = ['nama', 'kategori','jumlah','status','hargaPcs','gambar','deskripsi','ID_User','ID_Product'];
}
