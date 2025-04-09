<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
<<<<<<< HEAD
    protected $table = 'role';
    protected $fillable = ['name'];
}


=======
    use HasFactory;

    protected $table = 'role';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name',
    ];
}
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373
