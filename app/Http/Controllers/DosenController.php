<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
=======
use Illuminate\Validation\Rule;

use App\Models\Dosen;
use Illuminate\Http\Request;
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dosen.index')
            ->with('dosens', Dosen::all());
    }

<<<<<<< HEAD
    /**
     * Show the form for creating a new resource.
     */
=======

>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373
    public function create()
    {
        return view('dosen.create');
    }

<<<<<<< HEAD
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = validator($request->all(),[
            'nik' => 'required|string|max:7|unique:dosen,nik',
            'name' => 'required|string|max:100',
            'birth_date' => 'required|date',
            'email' => 'required|string|email|max:50|unique:dosen,email',
        ])->validate();

        $dosen = new Dosen($validatedData);
        $dosen->save();
        return redirect(route('dosenList'));
    }
=======
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'nik' => 'required|string|max:7|unique:dosen,nik',
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:50|unique:dosen,email',
            'birth_date' => 'required|date',
        ]);
        $dosen = new Dosen($validatedData);
        $dosen->save();
        return redirect(route('dosenList'))->with('success', 'Dosen has been added successfully!');
    }
    
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        return view('dosen.edit')->with('dosen', $dosen);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
<<<<<<< HEAD
        {
            $validatedData = validator($request->all(),[
                'nik'=> 'required','string'.'max:7',Rule::unique('dosen','nik')->ignore($dosen->nik, 'nik'),
                'name'=> 'required|string|max:100',
                'email'=> 'required','string','email','max:50',Rule::unique('dosen','email')->ignore($dosen->email, 'email'),
                'birth_date'=> 'required|date',
            ])->validate();

            $dosen['name']=$validatedData['name'];
            $dosen['email']=$validatedData['email'];
            $dosen['birth_date']=$validatedData['birth_date'];
            $dosen->save();
            return redirect(route('dosenList'))->with('success', 'Dosen Berhasil Diubah');
        }
    }
=======
        $validatedData = $request->validate([
            'nik' => [
                'required', 'string', 'max:7', 
                Rule::unique('dosen', 'nik')->ignore($dosen->nik, 'nik')
            ],
            'email' => [
                'required', 'string', 'email', 'max:50', 
                Rule::unique('dosen', 'email')->ignore($dosen->email, 'email')
            ],
            'birth_date' => 'required|date',
            'name' => 'required|string|max:100',
        ]);
    
        $dosen->update($validatedData);
        
        return redirect()->route('dosenList')->with('success', 'Dosen Berhasil Diubah');
    }
    
    
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
<<<<<<< HEAD
        return redirect(route('dosenList'))->with('success', 'Dosen berhasil dihapus');
=======
        return redirect(route('dosenList'))->with('Success', 'Dosen berhasil dihapus');
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373
    }
}
