<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ApiStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        return response([
            'message' => "All Students",
            'data' => $students ,
        ]);
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
    
    public function search($text){

        $students = Student::select(
            DB::raw("sum(lessonCount) as lessonCount"),
            DB::raw("sum(unexcused) as unexcused"),
            DB::raw('sum(absence) as absence'),
            DB::raw('sum(late) as late'),
            'studentId','studentName','id')
            ->groupBy('studentId')
            ->where('studentId' , 'LIKE' , "{$text}%" )
            ->orWhere('studentName' , 'LIKE' , "%{$text}%")
            ->get();

        return response([
            'data' => $students,
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subjects = Student::select('studentId' , 'studentName' , 'subject','group' ,'teacher' , 'lessonCount' , 'late' , 'absence' , 'unexcused')
            ->where('studentId' , $id)
            ->get();
        return response([
            'data'  => $subjects,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
