<?php

namespace App\Http\Controllers;

use App\Models\TeacherActivity;
use App\Http\Requests\StoreTeacherActivityRequest;
use App\Http\Requests\UpdateTeacherActivityRequest;

class TeacherActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TeacherActivity::with('teacher:id,name')->paginate(25);
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
    public function store(StoreTeacherActivityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TeacherActivity $teacherActivity)
    {
        return $teacherActivity->load('teacher');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeacherActivity $teacherActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherActivityRequest $request, TeacherActivity $teacherActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeacherActivity $teacherActivity)
    {
        //
    }
}
