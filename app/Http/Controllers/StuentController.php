<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class StuentController extends Controller
{

    public function home(){
        return view('student.home');
    }

    public function index(){
        $students = Student::all();

        return view("student.index", compact('students'));
    }

    public function create(){
        return view("student.create");
    }

    public function store(request $request){

        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'nullable|string',
            'contact_no' => 'nullable|string|max:10|min:10',
            'address' => 'required|string',
            'dob' => 'required|date',
        ]);


        //one way----------
        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->contact_no = $request->contact_no;
        $student->address = $request->address;
        $student->dob = $request->dob;
        $student->save();

        //another way----------
        // $student = Student::create($request->all());

        return redirect()->route('student.index');
    }

    public function edit($id){
        $student = Student::where('id',$id)->first();

        if (!$student) {
            return redirect()->route('students.index')->with('error', 'Student not found.');
        }

        return view('student.edit', compact('student'));
    }


    public function update(request $request, $student_id){

        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'nullable|string',
            'contact_no' => 'nullable|string|max:10',
            'address' => 'required|string',
            'dob' => 'required|date',
        ]);

        $student = Student::where('id',$student_id)->first();

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->contact_no = $request->contact_no;
        $student->address = $request->address;
        $student->dob = $request->dob;
        $student->save();

        return redirect()->route('student.index');
    }

    public function delete($student_id){
        Student::where('id',$student_id)->delete();
        return redirect()->route('student.index');
    }


  


}
