<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class RecordController extends Controller
{


    public function index(){

        $this->getData();

        $records = Record::select(
            DB::raw("sum(subject_credit) as credits") ,
            'student_id','student_name','id')
            ->groupBy('student_id')
            ->get();

        return view('records.index',['records' => $records]);
    }

    public function getData(){

        $response1 = Http::withHeaders([
            'X-Cybozu-API-Token' => '7xOoiYhgxne97O0TLnKVR1mLUwV5lpKfUuTRxOER',
        ])->get('https://e9pb3dfw9icr.cybozu.com/k/v1/records.json?app=160');


        if ($response1->successful()) {

            $data = $response1->json();

            foreach ($data['records'] as $record) {

                Record::updateOrCreate(
                    [
                        'student_id' => $record['studentId']['value'],
                        'subject_id' => $record['subjectId']['value'],
                    ],
                    [
                        'student_id' => $record['studentId']['value'],
                        'student_name' => $record['studentName']['value'],
                        'subject_name' => $record['subject']['value'],
                        'subject_credit' => $record['subjectCredit']['value'],
                        'grade' => $record['grade']['value'],
                ]);
            }


            return response()->json([
                'code' => 200,
                'message' => 'Records have been fetched successfully',
            ]);
        } else {
            return response()->json(['error' => 'Failed to retrieve data'], $response1->status());
        }


    }

    public function show($id){
        $subjects = Record::where('student_id' , $id)->get();
        $student = Record::where('student_id' , $id)->first();

        return view('records.show' , ['subjects' => $subjects , 'student' => $student]);
    }


}
