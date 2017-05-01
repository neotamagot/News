<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\User;
use App\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function create()
    {

    }

    public function store(Request $request)
    {
//        dd($request->input());
        $student = new Student;
        $student->code = $request->input('name');
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->faculty = $request->input('faculty');
        $student->birth_date = $request->input('birth_date');
        if($request->input('gender') == "0")
        {
            $gen = 'male';
        }else
        {
            $gen = 'female';
        }
        $student->gender = $gen;
        $student->address = $request->input('address');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->user_id = auth()->user()->id;
//dd($student);
        $student->save();

        return redirect('/home');
    }

    public function index()
    {
        $code = auth()->user()->name;
//        dd($code);
        $stu = DB::table('students')->where('students.code','=',$code)->first();
//        dd($stu);

//        dd($class_stu);
//        dd((count($class_stu)));


        if($stu == null)
        {
            return view('register');

        }
        $class_stu = Register::where('student_id','=',$stu->id)->get();
        return view('index',compact('stu','class_stu'));

    }

    public function show()
    {
        $code = auth()->user()->name;
//        dd($code);
        $stu = DB::table('students')->where('students.code','=',$code)->first();
        $class_stu = Register::where('student_id','=',$stu->id)->get();
//        dd($stu);
        return view('index',compact('stu','class_stu'));
    }
}
