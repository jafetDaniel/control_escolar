<?php
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Career;
use App\Models\Semester;


class StudentController extends Controller
{
  
    public function index()
    {
        $students = Student::paginate();

        return view('student.index', compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * $students->perPage());
    }

 
    public function create()
    {
        $student = new Student();

        $users = User::pluck('name', 'id');
        $careers = Career::pluck('name', 'id');
        $semesters = Semester::pluck('name', 'id');

        return view('student.create', compact('student', 'users', 'careers', 'semesters'));
    }

 
    public function store(Request $request)//create
    {
        request()->validate(Student::$rules);
        $student = request()->except('_token'); //obteniendo datos

        if ($request->hasFile('photo')) {
            $student['photo']=$request->file('photo')->store('uploads', 'public'); //subir foto a carpeta uploads
        }

        Student::insert($student); //insertando datos a la BD

        return redirect()->route('students.index')
            ->with('success', 'Student created successfully.');
    }

   
    public function show($id)
    {
        $student = Student::find($id);

        return view('student.show', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::find($id);

        $users = User::pluck('name', 'id');
        $careers = Career::pluck('name', 'id');
        $semesters = Semester::pluck('name', 'id');

        return view('student.edit', compact('student', 'users', 'careers', 'semesters'));
    }

  
    public function update(Request $request, $id)
    {
        request()->validate(Student::$rules);
        $student = request()->except('_token', '_method'); //obteniendo datos de form

         if ($request->hasFile('photo')) {
             $st = Student::findOrFail($id);//obteniendo datos anteriores de la BD
             Storage::delete('public/'.$st->foto); //borrar foto de storage
             $student['photo']=$request->file('photo')->store('uploads', 'public'); //subir nueva foto a carpeta uploads
        }

        Student::where('id','=',$id)->update($student); //modificando datos en la BD
        $st = Student::findOrFail($id);

        return redirect()->route('students.index')
            ->with('success', 'Student updated successfully');
    }

    
    public function destroy($id)
    {
        $st = Student::findOrFail($id);//obteniendo datos anteriores de la BD
        if (Storage::delete(['public/'.$st->foto])) { //borrar foto del storage
            $student = Student::find($id)->delete();
        }
       
        return redirect()->route('students.index')
            ->with('success', 'Student deleted successfully');
    }
}
