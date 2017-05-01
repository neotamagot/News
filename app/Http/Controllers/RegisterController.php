<?php

namespace App\Http\Controllers;

use App\Register;
use App\Student;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RegisterController extends Controller
{
    public function index()
    {

        return view('student_reg');
    }

    public function show($class_id)
    {
//        dd($class_id);
        $class = Subject::where('id',$class_id)->get();
//        dd($class);
        return view('student_reg',compact('class'));
    }

    public function store(Request $request)
    {
        $code = auth()->user()->name;
        $stu = DB::table('students')->where('code','=',$code)->first();
//        dd($stu->id);

        $stu_class = new Register;
        $stu_class->student_id = $stu->id;
        $stu_class->subject_id = $request->input('id');
        $stu_class->date_start = '0';
        $stu_class->date_end = '0';
//        dd($stu_class);
        $stu_class->save();

        return view('/home');
    }

    public function delete($id)
    {
        $document = Register::find($id);
        $document->delete();
        return json_encode(['success'=>true]);
    }

    public function insert($id)
    {
        $code = auth()->user()->name;
        $stu = DB::table('students')->where('code','=',$code)->first();
//        dd($stu->id);
        $check_class = Register::where('subject_id','=',$id)
            ->where('student_id','=',$stu->id)
            ->get();
//        dd($check_class);
        if(count($check_class) > 0)
        {
            return json_encode();
        }
        else
        {
            $stu_class = new Register;
            $stu_class->student_id = $stu->id;
            $stu_class->subject_id = $id;
            $stu_class->date_start = '0';
            $stu_class->date_end = '0';
//        dd($stu_class);
            $stu_class->save();
            return json_encode(['success'=>true]);
        }

    }

}
