<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tanggal',
        'jam',
        'lokasi',
        'suhu'
    ];

    public function catatanuser(){
        return $this->belongsTo(user::class, 'user_id', 'id');
    }
}
