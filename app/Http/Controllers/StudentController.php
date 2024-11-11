<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function json(){
        $students = Student::select(

            DB::raw("sum(lessonCount) as lessonCount"),
            DB::raw("sum(unexcused) as unexcused"),
            DB::raw('sum(absence) as absence'),
            DB::raw('sum(late) as late'),
            'studentId','studentName','id',
        )
            ->groupBy('studentId')
            ->get();
        $data = [];

        foreach ($students as $student){
            $data[]=[
                'id' => $student->studentId,
                'text' => "Hurmatli ota onalar,\nSizga farzandingizning universitetdagi davomat ko'rsatkichlarini taqdim qilamiz.\n\nIsm sharifi: "
                        . $student->studentName.
                         "\nO'rtacha davomati: ". round(($student->lessonCount-$student->absence-$student->unexcused)*100/($student->lessonCount))  ."%\n"
                        . ' ' . "Batafsil: " .'https://parents.jdu.uz/students/'.$student->studentId ,
            ];
        }
        return $data;
    }

    public function index()
    {
        $students = Student::select(
            DB::raw("sum(lessonCount) as lessonCount"),
            DB::raw("sum(unexcused) as unexcused"),
            DB::raw('sum(absence) as absence'),
            DB::raw('sum(late) as late'),
            'studentId','studentName','id')
        ->groupBy('studentId')
        ->get();

        return view('students.students',['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $subjects = Student::where('studentId' , $id)->get();
//       $student = DB::table('students')->where('studentId')->first();
        $student = Student::where('studentId' , $id)->first();
       return view('students.show' , ['subjects' => $subjects , 'student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
