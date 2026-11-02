<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    // Di sini kita menambahkan 'poli_id' agar bisa disimpan
    protected $fillable = [
        'doctor_code',
        'name',
        'specialization',
        'phone',
        'is_active',
        'poli_id', 
    ];

    // Method ini memberitahu Laravel bahwa 1 Dokter milik 1 Poli
    public function poli()
    {
        return $this->belongsTo(Poli::class);
    }
}