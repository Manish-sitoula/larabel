<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        //dd($students);
        return view('students.index',compact('students'));
    }
    public function create(){
        return view('students.create');
    }
    public function store(Request $request){
        try {
            Student::create($request->all());
            return redirect()->back();
        } catch (\Throwable $th) {
            dd("Error encountered");
        }
    }
}

