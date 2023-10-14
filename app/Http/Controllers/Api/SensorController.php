<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sensor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Sensor::orderBy('suhu','asc')->get();
        return response()->json([
            'status'=>true,
            'message'=>'Data ditemukan',
            'data'=>$data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataSensor = new Sensor;

        $rules = [
            'suhu' => 'required',
            'kelembapan' => 'required',
            'api' => 'required',
            'asap' => 'required',
            'motion' => 'required',
            'pintu' => 'required',
            'buzzer' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'=>false,
                'message'=>'Gagal memasukan data',
                'data'=>$validator->errors()
            ]);
        }

        $dataSensor->suhu = $request->suhu;
        $dataSensor->kelembapan = $request->kelembapan;
        $dataSensor->api = $request->api;
        $dataSensor->asap = $request->asap;
        $dataSensor->motion = $request->motion;
        $dataSensor->pintu = $request->pintu;
        $dataSensor->buzzer = $request->buzzer;

        $post = $dataSensor->save();

        return response()->json([
            'status' => true,
            'message'=> 'Sukses memasukan data'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Sensor::find($id);
        if($data){
            return response()->json([
                'status'=>true,
                'message'=>'Data ditemukan',
                'data'=>$data
            ], 200);  
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataSensor = Sensor::find($id);
        if(empty($dataSensor)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ],404);
        }

        $rules = [
            'suhu' => 'required',
            'kelembapan' => 'required',
            'api' => 'required',
            'asap' => 'required',
            'motion' => 'required',
            'pintu' => 'required',
            'buzzer' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'=>false,
                'message'=>'Gagal UPDATE data',
                'data'=>$validator->errors()
            ]);
        }

        $dataSensor->suhu = $request->suhu;
        $dataSensor->kelembapan = $request->kelembapan;
        $dataSensor->api = $request->api;
        $dataSensor->asap = $request->asap;
        $dataSensor->motion = $request->motion;
        $dataSensor->pintu = $request->pintu;
        $dataSensor->buzzer = $request->buzzer;

        $post = $dataSensor->save();

        return response()->json([
            'status' => true,
            'message'=> 'Sukses UPDATE data'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataSensor = Sensor::find($id);
        if(empty($dataSensor)){
            return response()->json([
                'status' => false,
                'message' => 'Data HAPUS ditemukan'
            ],404);
        }

        $post = $dataSensor->delete();

        return response()->json([
            'status' => true,
            'message'=> 'Sukses HAPUS data'
        ]);
    }
}
