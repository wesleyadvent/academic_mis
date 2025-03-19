<?php

namespace App\Http\Controllers;

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
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'email' => 'required|email|max:255|unique:dosen,email,' . $dosen->nik . ',nik',
        ]);
    
        $dosen->update([
            'name' => $request->name,
            'birth_date' => $request->birth_date,
            'email' => $request->email,
        ]);
    
        // Redirect dengan pesan sukses
        return redirect()->route('dosenList')->with('success', 'Dosen berhasil diperbarui.');
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
