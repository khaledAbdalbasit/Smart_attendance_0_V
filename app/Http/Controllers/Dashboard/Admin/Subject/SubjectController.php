<?php

namespace App\Http\Controllers\Dashboard\Admin\Subject;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubjectRequest;
use App\Models\Course;
use App\Models\Instructor;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Course::get();
        return view('dashboard.admin.subject.index', compact('subjects'));
    }

    public function create()
    {
        $instructors = Instructor::where('role', '!=', 'super-admin')
            ->where('role', '!=', 'admin')
            ->get();
        return view('dashboard.admin.subject.create', compact('instructors'));
    }

    public function store(SubjectRequest $request)
    {
        $validated = $request->validated();
        $subject = Course::create($validated);
        return redirect()->route('admin.subjects')->with('success', $subject->course_name . ' created successfully.');
    }

    public function edit($id)
    {
        $subject = Course::find($id);
        $instructors = Instructor::where('role', '!=', 'super-admin')
            ->where('role', '!=', 'admin')
            ->get();
        return view('dashboard.admin.subject.edit', compact('subject', 'instructors'));
    }

    public function update(SubjectRequest $request, $id)
    {
        $subject = Course::findOrFail($id);
        $validated = $request->validated();
        $subject->update($validated);
        return redirect()->route('admin.subjects')->with('success', 'Subject updated successfully.');
    }

    public function delete($id)
    {
        $Course = Course::find($id);
        $name = $Course->course_name;
        $Course->delete();
        return redirect()->route('admin.subjects')->with('success-delete', $name . ' deleted successfully.');

    }
}
