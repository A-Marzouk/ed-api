<?php

namespace App\Http\Controllers;

use App\Models\ClassProgress;
use App\Http\Requests\StoreClassProgressRequest;
use App\Http\Requests\UpdateClassProgressRequest;

class ClassProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ClassProgress::with('educationClass:id,subject')->paginate(25);
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
    public function store(StoreClassProgressRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ClassProgress $classProgress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClassProgress $classProgress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClassProgressRequest $request, ClassProgress $classProgress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClassProgress $classProgress)
    {
        //
    }
}
