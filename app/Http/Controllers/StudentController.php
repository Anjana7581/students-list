<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }


    public function create()
    {
        return view('students.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'age' => 'required|integer',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        Student::create([
            'name' => $request->name,
            'class' => $request->class,
            'age' => $request->age,
            'photo' => $photoPath,
        ]);

        return redirect()->route('students.index')->with('success', 'Student created successfully!');
    }


    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }


    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }


    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'age' => 'required|integer',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            if ($student->photo) {
                Storage::disk('public')->delete($student->photo);
            }
            $student->photo = $request->file('photo')->store('photos', 'public');
        }

        $student->update($request->only(['name', 'class', 'age']));

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }


    public function destroy(Student $student)
    {
        if ($student->photo) {
            Storage::disk('public')->delete($student->photo);
        }
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}
