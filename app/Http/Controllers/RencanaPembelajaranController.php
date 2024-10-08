<?php

namespace App\Http\Controllers;

use App\Models\RencanaPembelajaran;
use App\Http\Requests\StoreRencanaPembelajaranRequest;
use App\Http\Requests\UpdateRencanaPembelajaranRequest;

class RencanaPembelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['rencana_pembelajaran'] = \App\Models\RencanaPembelajaran::latest()->paginate(10);
        return view ('rencana_pembelajaran_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRencanaPembelajaranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RencanaPembelajaran $rencanaPembelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RencanaPembelajaran $rencanaPembelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRencanaPembelajaranRequest $request, RencanaPembelajaran $rencanaPembelajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RencanaPembelajaran $rencanaPembelajaran)
    {
        //
    }
}
