<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
<<<<<<< HEAD
    public function index() {
        $asisten = 'John Doe';
        $mahasiswas = ['Maher','Marco', 'Syehan'];

        return view('demo.file2', [
            'asdos' => $asisten,
        ])->with('students', $mahasiswas);
=======
  
    public function index() {
        $asisten = 'John doe';
        $mahasiswa = ['Maher', 'Marco', 'Syehan'];
        return view('demo.file2', [
            'asdos' => $asisten,
        ])-> with('students', $mahasiswa);
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373
    }
}
