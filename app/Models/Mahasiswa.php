<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $primaryKey = 'nrp';

    protected $fillable = ['nrp', 'name', 'birth_date', 'email', 'phone', 'address', 'Dosen_nik'];

    protected $keyType = 'string';

    public $incrementing = false;

    
    public function dosenWali() {
        return $this->belongsTo(Dosen::class, 'Dosen_nik');
    }
}
