<?php

namespace App\Http\Controllers;

use App\Models\Hari_model;
use Illuminate\Http\Request;

class HariController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hari = Hari_model::get();
        return view ('hari/index', compact('hari'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view ('hari.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hari = new Hari_model();
        $hari->NamaHari = $request->NamaHari;
        $hari->save();
        return redirect('hari');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
