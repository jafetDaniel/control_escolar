<?php

namespace App\Http\Controllers;

use App\Models\GroupsStudent;
use Illuminate\Http\Request;

/**
 * Class GroupsStudentController
 * @package App\Http\Controllers
 */
class GroupsStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupsStudents = GroupsStudent::paginate();

        return view('groups-student.index', compact('groupsStudents'))
            ->with('i', (request()->input('page', 1) - 1) * $groupsStudents->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groupsStudent = new GroupsStudent();
        return view('groups-student.create', compact('groupsStudent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(GroupsStudent::$rules);

        $groupsStudent = GroupsStudent::create($request->all());

        return redirect()->route('groups-student.index')
            ->with('success', 'GroupsStudent created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $groupsStudent = GroupsStudent::find($id);

        return view('groups-student.show', compact('groupsStudent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groupsStudent = GroupsStudent::find($id);

        return view('groups-student.edit', compact('groupsStudent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  GroupsStudent $groupsStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GroupsStudent $groupsStudent)
    {
        request()->validate(GroupsStudent::$rules);

        $groupsStudent->update($request->all());

        return redirect()->route('groups-student.index')
            ->with('success', 'GroupsStudent updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $groupsStudent = GroupsStudent::find($id)->delete();

        return redirect()->route('groups-student.index')
            ->with('success', 'GroupsStudent deleted successfully');
    }
}
