<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
    ];

    /**
     * Get the kelas associated with the Guru
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kelas()
    {
        return $this->hasOne(Kelas::class);
    }
}
