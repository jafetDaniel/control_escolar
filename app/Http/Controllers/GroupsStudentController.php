<?php

namespace App\Http\Controllers;

use App\Models\GroupsStudent;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Group;


class GroupsStudentController extends Controller
{
   
    public function index()
    {
        $groupsStudents = GroupsStudent::paginate();

        return view('groups-student.index', compact('groupsStudents'))
            ->with('i', (request()->input('page', 1) - 1) * $groupsStudents->perPage());
    }

 
    public function create()
    {
        $groupsStudent = new GroupsStudent();

        $students = Student::pluck('number_control', 'id');
        $groups = Group::pluck('name', 'id');

        return view('groups-student.create', compact('groupsStudent', 'students', 'groups'));
    }


    public function store(Request $request)
    {
        request()->validate(GroupsStudent::$rules);

        $groupsStudent = GroupsStudent::create($request->all());

        return redirect()->route('groups-student.index')
            ->with('success', 'GroupsStudent created successfully.');
    }

  
    public function show($id)
    {
        $groupsStudent = GroupsStudent::find($id);

        return view('groups-student.show', compact('groupsStudent'));
    }

   
    public function edit($id)
    {
        $groupsStudent = GroupsStudent::find($id);

        $students = Student::pluck('number_control', 'id');
        $groups = Group::pluck('name', 'id');


        return view('groups-student.edit', compact('groupsStudent', 'students', 'groups'));
    }

  
    public function update(Request $request, GroupsStudent $groupsStudent)
    {
        request()->validate(GroupsStudent::$rules);

        $groupsStudent->update($request->all());

        return redirect()->route('groups-student.index')
            ->with('success', 'GroupsStudent updated successfully');
    }


    public function destroy($id)
    {
        $groupsStudent = GroupsStudent::find($id)->delete();

        return redirect()->route('groups-student.index')
            ->with('success', 'GroupsStudent deleted successfully');
    }
}
