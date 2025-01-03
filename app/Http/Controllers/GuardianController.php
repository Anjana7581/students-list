<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    public function index()
    {
        $guardians = Guardian::all();
        return view('guardians.index', compact('guardians'));
    }


    public function create()
    {
        $students = Student::all();
        return view('guardians.create', compact('students'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contact_info' => 'required',
            'student_id' => 'required|exists:students,id',
        ]);
    

        Guardian::create($request->all());
    
        return redirect()->route('guardians.index')->with('success', 'Guardian created successfully!');
    }
    

    public function show($id)
{
    $guardian = Guardian::with('student')->findOrFail($id);

    return view('guardians.show', compact('guardian'));
}


public function edit($id)
    {
        $guardian = Guardian::findOrFail($id);
        $students = Student::all();  
        return view('guardians.edit', compact('guardian', 'students'));
    }
    

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'contact_info' => 'required|string|max:255',
            'student_id' => 'exists:students,id', 
        ]);
    
        $guardian = Guardian::findOrFail($id);
        $guardian->update($validatedData);
    
        return redirect()->route('guardians.index')->with('success', 'Guardian updated successfully.');
    }
    

    public function destroy(Request $request, $guardianId)
    {
        $studentId = $request->input('student_id');
        $guardian = Guardian::where('student_id', $studentId)
                             ->where('id', $guardianId)
                             ->first();
    
        if ($guardian) {
            $guardian->delete();
            return redirect()->route('guardians.index')->with('success', 'Guardian deleted successfully!');
        }
    
        return redirect()->route('guardians.index')->with('error', 'Guardian not found.');
    }
    
    
}
