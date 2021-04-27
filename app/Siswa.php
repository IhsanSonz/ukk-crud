<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nama',
        'kelas_id',
        'alamat',
    ];

    /**
     * Get the kelas that owns the Siswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
