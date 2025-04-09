<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';

    protected $primaryKey = 'nik';

    protected $fillable = ['nik', 'name', 'email', 'birth_date'];

    protected $keyType = 'string';

    public $incrementing = false;
}
