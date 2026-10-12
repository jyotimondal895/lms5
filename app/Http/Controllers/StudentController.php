<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
 {
    public function home()
    {
        return view('home');
    }  /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('login');
    } 
    public function login2(Request $request)
    {
        print_r($request->all());
        
    }
   public function index()
{
    try {
        Student::create([
            'name' => 'Jyoti Mondal',
            'email' => 'jyotimondal1131@gmail.com',
            'password' => '12345',
        ]);

        return view('index', [
            'message' => 'Student added successfully.'
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
    public function create(Request $request)
    {
       

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
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
