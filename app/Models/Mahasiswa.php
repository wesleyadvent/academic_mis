<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $primaryKey = 'nrp';

<<<<<<< HEAD
    protected $fillable = ['nrp', 'name', 'email', 'birth_date', 'phone', 'address', 'profile_picture', 'dosen_nik'];
=======
    protected $fillable = ['nrp', 'name', 'birth_date', 'email', 'phone', 'address', 'Dosen_nik'];
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373

    protected $keyType = 'string';

    public $incrementing = false;

<<<<<<< HEAD
    public function dosenWali() {
        return $this->belongsTo(Dosen::class, 'dosen_nik');
=======
    
    public function dosenWali() {
        return $this->belongsTo(Dosen::class, 'Dosen_nik');
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373
    }
}
