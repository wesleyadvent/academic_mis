<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;

use App\Models\Dosen;
use Illuminate\Http\Request;

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


    public function create()
    {
        return view('dosen.create');
    }

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
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect(route('dosenList'))->with('Success', 'Dosen berhasil dihapus');
    }
}
