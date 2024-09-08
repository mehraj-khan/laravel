<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index()
    {
       $data = Student::all();
        return view('Students.index',['students'=>$data]);
    }
    public function create()
    {
        return view('Students.create');
    }
    public function submit(Request $request)
    {
        $std = new Student();
        $std->name = $request->name;
        $std->email = $request->email;
        $std->password = $request->password;
        $std->phone = $request->phone;
        if($std->save())
        {
            return redirect('Students/index');
        }
        else
        {
            return view('Students.create');
        }
    }
}
