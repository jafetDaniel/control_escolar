<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use App\Models\Course;

class GroupController extends Controller
{

    public function index()
    {
        $groups = Group::paginate();

        return view('group.index', compact('groups'))
            ->with('i', (request()->input('page', 1) - 1) * $groups->perPage());
    }

  
    public function create()
    {
        $group = new Group();
        $courses = Course::pluck('name', 'id');

        return view('group.create', compact('group', 'courses'));
    }

   
    public function store(Request $request)
    {
        request()->validate(Group::$rules);

        $group = Group::create($request->all());

        return redirect()->route('groups.index')
            ->with('success', 'Group created successfully.');
    }

    public function show($id)
    {
        $group = Group::find($id);

        return view('group.show', compact('group'));
    }

  
    public function edit($id)
    {
        $group = Group::find($id);
        $courses = Course::pluck('name', 'id');

        return view('group.edit', compact('group', 'courses'));
    }

  
    public function update(Request $request, Group $group)
    {
        request()->validate(Group::$rules);

        $group->update($request->all());

        return redirect()->route('groups.index')
            ->with('success', 'Group updated successfully');
    }


    public function destroy($id)
    {
        $group = Group::find($id)->delete();

        return redirect()->route('groups.index')
            ->with('success', 'Group deleted successfully');
    }
}
