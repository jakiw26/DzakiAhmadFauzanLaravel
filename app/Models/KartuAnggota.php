<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KartuAnggota extends Model
{
    protected $fillable = [
        'nomor_kartu',
        'tanggal_aktivasi',
        'anggota_id',
    ];

    public function anggota(): BelongsTo
    {
        return $this->belongsTo(Anggota::class, 'anggota_id');
    }
}
