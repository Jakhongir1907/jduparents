<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecordController extends Controller
{


    public function index(){

    }

    public function getData(){

        $response1 = Http::withHeaders([
            'X-Cybozu-API-Token' => '7xOoiYhgxne97O0TLnKVR1mLUwV5lpKfUuTRxOER',
        ])->get('https://e9pb3dfw9icr.cybozu.com/k/v1/records.json?app=160');


        if ($response1->successful()) {

            $data = $response1->json();
            $count = 0;
            foreach ($data['records'] as $record) {
                $count++;
            }

            return $count;

        } else {
            // Handle the error
            return response()->json(['error' => 'Failed to retrieve data'], $response1->status());
        }




    }

}
