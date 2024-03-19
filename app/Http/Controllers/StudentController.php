<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modle\Student;

class StudentController extends Controller
{
    protected $student;
    
    public function _construct(){
        $this -> student = new Student();
    }

    public function index()
    {
       return $this->student->all();
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
    public function show(string $id)
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
