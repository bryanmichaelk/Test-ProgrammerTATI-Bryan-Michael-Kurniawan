<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wilayah;

class WilayahController extends Controller
{
    //
    public function getAllProvinsi() {
        $provinsi = Wilayah::all();
        return response()->json([
            'success' => true,
            'data' => $provinsi,
        ]);
    }

    public function getProvinsiById($id) {
        $provinsi = Wilayah::where('kode', $id )->first();
        if(!$provinsi) {
            return response()->json([
                'success' =>false,
                'message' => 'Province not found',
            ], 404);
        }
        return response()->json([
            'success' => true,
            'data' => $provinsi,
        ]);
    }

    public function createProvinsi( Request $request) {

        $validated = $request->validate([
            'kode' => 'required|string|max:13|unique:wilayahs,kode',
            'name' => 'required|string|max:100',
        ]);
    
        $newprovinsi = Wilayah::create($validated);
        
        return response()->json([
            'success'=> true,
            'data' => $newprovinsi]);

    }

    public function deleteProvinsi($kode) {
        $provinsi= Wilayah::where('kode', $kode)->first();

        if(!$provinsi) {
            return response()->json([
                'success'=> false,
                'message'=> "Province not found"
            ], 404);
        }
        $provinsi->delete();
        $res=[
            "success"=> true,
            "message"=> "Delete successfully"
        ];

        return response()->json($res);
    }

    public function updateProvinsi(Request $request, $kode) {
        $provinsi = Wilayah::where('kode', $kode)->first();
    
        if (!$provinsi) {
            return response()->json([
                'success' => false,
                'message' => 'Province not found'
            ], 404);
        }
    
        $request->validate([
            'kode' => 'required|string|max:13|unique:wilayahs,kode,' . $provinsi->kode . ',kode',
            'name' => 'required|string|max:100',
        ]);
    
        $provinsi->update($request->only(['kode', 'name']));
    
        return response()->json([
            'success' => true,
            'message' => 'Province updated successfully',
            'data' => $provinsi,
        ]);
    }
}
