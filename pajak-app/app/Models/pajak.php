<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pajak extends Model
{
    use HasFactory;
    protected $table = 'pajak';
    protected $fillable = ['total', 'persen_pajak', 'total_harga_sebelum_pajak', 'rupiah_pajak'];

}
