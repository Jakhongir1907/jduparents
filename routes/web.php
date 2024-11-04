<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/' , [\App\Http\Controllers\StudentController::class , 'index']);

Route::resource('students', \App\Http\Controllers\StudentController::class);
Route::get('/json' , [\App\Http\Controllers\StudentController::class,'json']);

Route::get('/refresh' , function(){

            Student::truncate();

        //IT Attendance 2023-2024 Spring New project
            $studentsData = json_decode(file_get_contents('https://script.google.com/macros/s/AKfycbyPQN6j_uIKCR1z8T06SJOa3-DnHL8mnpeCSN2H3IOnBFqyg3zu92qj4reV3kWf2MSa/exec'));


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

            //Intermediate and Upper Japanese Language Attendance 2023-2024 Spring

             $studentsData1 = json_decode(file_get_contents('https://script.google.com/macros/s/AKfycbxL0yK27N31CCPsoZ--ctK9SjuHEFMyLIDyDuE3oLGrGAL9dp_Rt2aiaNUV0V7qDDdykw/exec'));


            foreach ($studentsData1->data as $student){
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

            //Cowork Attendance 2023-2024 Spring

            $studentsData2 = json_decode(file_get_contents('https://script.google.com/macros/s/AKfycbxrv6q0_6eMChG-GA3RSM66-Nzr86shjG6Ja5qYp1eatOzihMXZS1R74g6BEIXWbUuSkQ/exec'));


            foreach ($studentsData2->data as $student){
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

           //JSL Attendance 2023-2024 Spring

              $studentsData3 = json_decode(file_get_contents('https://script.google.com/macros/s/AKfycbwBproJy8KbGQNgyhWTX_KaPjwxDDHD4yfT4Qk0gBHFWKUBGaWxQ9M3P0wwgl7FM7U/exec'));


            foreach ($studentsData3->data as $student){
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

             //Partner Universities Attendance 2023-2024 Spring

              $studentsData4 = json_decode(file_get_contents('https://script.google.com/macros/s/AKfycbzVW3vmtB-_B9gIQ2_czyWGrmPG5a9Utg8ECAMDkMtDv7H7ca9a3WdXjncbfK3titiY0g/exec'));


            foreach ($studentsData4->data as $student){
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





        return 0;


});
