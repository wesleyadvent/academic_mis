<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';

    protected $primaryKey = 'nik';

<<<<<<< HEAD
    protected $fillable = ['nik', 'name', 'email', 'birth_date'];

    protected $keyType = 'string';

    public $incrementing = false;
=======
    protected $fillable = ['nik', 'name', 'birth_date', 'email'];

    protected $keyType = 'string';

>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373
}
