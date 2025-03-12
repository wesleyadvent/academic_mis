<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';

    protected $primaryKey = 'nik';

    protected $fillable = ['nik', 'name', 'birth_date', 'email'];

    protected $keyType = 'string';

}
