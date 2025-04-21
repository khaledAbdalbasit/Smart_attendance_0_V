<?php

namespace App\Http\Controllers\Dashboard\Admin\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StudentRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::get();
        return view('dashboard.admin.student.index', compact('students'));
    }

    public function create()
    {
        return view('dashboard.admin.student.create');
    }

    public function store(StudentRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('face_data')) {
            $imagePath = $request->file('face_data')->store('students', 'public');
            $validatedData['face_data'] = $imagePath;
        }

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect()->route('admin.students')->with('success', 'Student added successfully.');
    }

    public function edit($id)
    {
        $student = User::find($id);
        return view('dashboard.admin.student.edit', compact('student'));
    }

    public function update(StudentRequest $request, $id)
    {
        $student = User::findOrFail($id);
        $validatedData = $request->validated();

        if ($request->filled('password')) {
            $validatedData['password'] = bcrypt($request->password);
        } else {
            unset($validatedData['password']);
        }

        if ($request->hasFile('face_data')) {
            // Optional: delete old image
            if ($student->face_data && \Storage::disk('public')->exists($student->face_data)) {
                \Storage::disk('public')->delete($student->face_data);
            }

            $imagePath = $request->file('face_data')->store('students', 'public');
            $validatedData['face_data'] = $imagePath;
        }

        $student->update($validatedData);

        return redirect()->route('admin.students')->with('success', 'Student updated successfully.');
    }

    public function delete($id)
    {
        $student = User::find($id);
        $name = $student->name;
        $student->delete();
        return redirect()->route('admin.students')->with('success-delete', $name . ' deleted successfully.');

    }


}
