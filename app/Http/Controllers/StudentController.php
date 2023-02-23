<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    //
    public function index(){
        $data = Student::get();
       // return $data;
       return view('student-list',compact('data'));
    }
    public function addStudent(){
        return view('add-student');
    }
    public function saveStudent(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required'
        ]);
       // dd($request->all());
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        
        $stu = new Student();
        $stu->name = $name;
        $stu->email = $email;
        $stu->phone = $phone;
        $stu->address = $address;
        $stu->save();

        return redirect()->back()->with('success','Student Added Succesfully!');
    }

    public function editStudent($id){
        $data = Student::where('id','=',$id)->first();
        return view('edit-student',compact('data'));    
    }

    public function updateStudent(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);
       // dd($request->all());
       $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        Student::where('id','=',$id)->update([
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'address'=>$address
        ]);
        return redirect()->back()->with('success','Student Updated Successfully.');
    }
    public function deleteStudent($id){
    Student::where('id','=',$id)->delete();
    return redirect()->back()->with('success','Student Deleted Successfully.');
    }
}
