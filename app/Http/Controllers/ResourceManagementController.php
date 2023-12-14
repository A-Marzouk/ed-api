<?php

namespace App\Http\Controllers;

use App\Models\ResourceManagement;
use App\Http\Requests\StoreResourceManagementRequest;
use App\Http\Requests\UpdateResourceManagementRequest;

class ResourceManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ResourceManagement::with('resource:id,name')->paginate(25);
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
    public function store(StoreResourceManagementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ResourceManagement $resourceManagement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ResourceManagement $resourceManagement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResourceManagementRequest $request, ResourceManagement $resourceManagement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResourceManagement $resourceManagement)
    {
        //
    }
}
