<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function refresh(){

        $studentsData = json_decode(file_get_contents('https://script.google.com/macros/s/AKfycbwgadP0xtg9q2h3FXch5vUSFnmQDmWecxUWFpHVMm_-f_EbP12iyhiqubpZN29WmY5H/exec'));
        Student::truncate();
        foreach ($studentsData->data as $student){
            if(empty($student->name) or empty($student->id)){
                continue;
            }
            Student::updateOrCreate(
                [
                    'group' => $student->group,
                    'subject' => $student->subject,
                    'studentId' => $student->id,
                ],
                [
                    'lessonCount' => (int)$student->lessonCount,
                    'teacher' => $student->teacher ,
                    'studentName' => $student->name ,
                    'late' => (int)$student->late,
                    'absence' => (int)$student->absence,
                    'unexcused' => (int)$student->unexcused,
                ]
            );
        }
        return response()->json([
            'success' => true,
            'message' => 'Data has been refreshed successfully'
        ]);
    }
}
