<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\User;

class TeacherController extends Controller
{

    public function index()
    {
        $teachers = Teacher::paginate();

        return view('teacher.index', compact('teachers'))
            ->with('i', (request()->input('page', 1) - 1) * $teachers->perPage());
    }

   
    public function create()
    {
        $teacher = new Teacher();
        $users = User::pluck('name', 'id');

        return view('teacher.create', compact('teacher', 'users'));
    }

   
    public function store(Request $request)
    {
        request()->validate(Teacher::$rules);

        $teacher = Teacher::create($request->all());

        return redirect()->route('teachers.index')
            ->with('success', 'Teacher created successfully.');
    }

  
    public function show($id)
    {
        $teacher = Teacher::find($id);

        return view('teacher.show', compact('teacher'));
    }


    public function edit($id)
    {
        $teacher = Teacher::find($id);
        $users = User::pluck('name', 'id');

        return view('teacher.edit', compact('teacher', 'users'));
    }


    public function update(Request $request, Teacher $teacher)
    {
        request()->validate(Teacher::$rules);

        $teacher->update($request->all());

        return redirect()->route('teachers.index')
            ->with('success', 'Teacher updated successfully');
    }

  
    public function destroy($id)
    {
        $teacher = Teacher::find($id)->delete();

        return redirect()->route('teachers.index')
            ->with('success', 'Teacher deleted successfully');
    }
}
