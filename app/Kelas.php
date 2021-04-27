<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
        'nama',
        'guru_id',
        'wali',
    ];

    /**
     * Get all of the siswas for the Kelas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function siswas()
    {
        return $this->hasMany(Siswa::class);
    }

    /**
     * Get the gurus that owns the Kelas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gurus()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }
}
