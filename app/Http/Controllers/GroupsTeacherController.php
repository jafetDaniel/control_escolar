<?php

namespace App\Http\Controllers;

use App\Models\GroupsTeacher;
use Illuminate\Http\Request;
use App\Models\Group;

class GroupsTeacherController extends Controller
{
 
    public function index()
    {
        $groupsTeachers = GroupsTeacher::paginate();

        return view('groups-teacher.index', compact('groupsTeachers'))
            ->with('i', (request()->input('page', 1) - 1) * $groupsTeachers->perPage());
    }


    public function create()
    {
        $groupsTeacher = new GroupsTeacher();
        $groups = Group::pluck('name', 'id');

        return view('groups-teacher.create', compact('groupsTeacher', 'groups'));
    }

   
    public function store(Request $request)
    {
        request()->validate(GroupsTeacher::$rules);

        $groupsTeacher = GroupsTeacher::create($request->all());

        return redirect()->route('groups-teacher.index')
            ->with('success', 'GroupsTeacher created successfully.');
    }

  
    public function show($id)
    {
        $groupsTeacher = GroupsTeacher::find($id);

        return view('groups-teacher.show', compact('groupsTeacher'));
    }

  
    public function edit($id)
    {
        $groupsTeacher = GroupsTeacher::find($id);
        $groups = Group::pluck('name', 'id');

        return view('groups-teacher.edit', compact('groupsTeacher', 'groups'));
    }

 
    public function update(Request $request, GroupsTeacher $groupsTeacher)
    {
        request()->validate(GroupsTeacher::$rules);

        $groupsTeacher->update($request->all());

        return redirect()->route('groups-teacher.index')
            ->with('success', 'GroupsTeacher updated successfully');
    }


    public function destroy($id)
    {
        $groupsTeacher = GroupsTeacher::find($id)->delete();

        return redirect()->route('groups-teacher.index')
            ->with('success', 'GroupsTeacher deleted successfully');
    }
}
