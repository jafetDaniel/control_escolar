<?php

namespace App\Http\Controllers;

use App\Models\GroupsTeacher;
use Illuminate\Http\Request;

/**
 * Class GroupsTeacherController
 * @package App\Http\Controllers
 */
class GroupsTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupsTeachers = GroupsTeacher::paginate();

        return view('groups-teacher.index', compact('groupsTeachers'))
            ->with('i', (request()->input('page', 1) - 1) * $groupsTeachers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groupsTeacher = new GroupsTeacher();
        return view('groups-teacher.create', compact('groupsTeacher'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(GroupsTeacher::$rules);

        $groupsTeacher = GroupsTeacher::create($request->all());

        return redirect()->route('groups-teacher.index')
            ->with('success', 'GroupsTeacher created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $groupsTeacher = GroupsTeacher::find($id);

        return view('groups-teacher.show', compact('groupsTeacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groupsTeacher = GroupsTeacher::find($id);

        return view('groups-teacher.edit', compact('groupsTeacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  GroupsTeacher $groupsTeacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GroupsTeacher $groupsTeacher)
    {
        request()->validate(GroupsTeacher::$rules);

        $groupsTeacher->update($request->all());

        return redirect()->route('groups-teacher.index')
            ->with('success', 'GroupsTeacher updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $groupsTeacher = GroupsTeacher::find($id)->delete();

        return redirect()->route('groups-teacher.index')
            ->with('success', 'GroupsTeacher deleted successfully');
    }
}
