<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Semester;
use App\Models\Career;

class CourseController extends Controller
{
  
    public function index()
    {
        $courses = Course::paginate();

        return view('course.index', compact('courses'))
            ->with('i', (request()->input('page', 1) - 1) * $courses->perPage());
    }


    public function create()
    {
        $course = new Course();

        $careers = Career::pluck('name', 'id');
        $semesters = Semester::pluck('name', 'id');

        return view('course.create', compact('course', 'careers', 'semesters'));
    }

    public function store(Request $request)
    {
        request()->validate(Course::$rules);

        $course = Course::create($request->all());

        return redirect()->route('courses.index')
            ->with('success', 'Course created successfully.');
    }

    public function show($id)
    {
        $course = Course::find($id);

        return view('course.show', compact('course'));
    }

    public function edit($id)
    {
        $course = Course::find($id);
        
        $careers = Career::pluck('name', 'id');
        $semesters = Semester::pluck('name', 'id');

        return view('course.edit', compact('course', 'careers', 'semesters'));
    }

    public function update(Request $request, Course $course)
    {
        request()->validate(Course::$rules);

        $course->update($request->all());

        return redirect()->route('courses.index')
            ->with('success', 'Course updated successfully');
    }

    public function destroy($id)
    {
        $course = Course::find($id)->delete();

        return redirect()->route('courses.index')
            ->with('success', 'Course deleted successfully');
    }
}
