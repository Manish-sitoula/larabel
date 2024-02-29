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
        $request->validate([
            "name"=>"required",
            "email"=>"required|email"
        ]);
        try {
            Student::create($request->all());
            return redirect()->back()->with("message","Data inserted");
        } catch (\Throwable $th) {
            return redirect()->back()->with("error","Error Encountered");
        }
    }
    public function delete($id){
        try{   
            Student::findOrFail($id)->delete();
            return redirect()->back()->with("message","Data deleted successfully");
        }catch(\Exception $e){
            return redirect()->back()->with("error","Error encountered");
        }

       

    }
    public function edit($id){
        try{
            $students = Student::find($id);
            return view('students.edit',compact('students'));
          
        }
        catch(\Exception $e){
           return redirect()->back()->with("error","Error encountered");
        }
      
    }
    
}
 

