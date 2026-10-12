<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    try {
        Teacher::create([
            'name' => 'Jyoti Mondal',
            'email' => 'jyotimondal1131@gmail.com',
            'password' => '12345',
            'department' => 'MBA',
            'experience' => '3year'       
             ]);

        return view('index', [
            'message' => 'teacher added successfully.'
        ]);

    } catch (\Exception $e) {

        return view('index', [
            'message' => 'already exist'
        ]);
    }
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
