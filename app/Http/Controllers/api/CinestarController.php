<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CinestarController extends Controller
{
    public function cines(){
        $cines = DB::select('call sp_getCines()');
        $success=isset($cines);
        $status = $success ? 200: 404;
        
        $cines = [
            'success' => $success,
            'data' => $success ? $cines : null,
            'message' => $success ? 'Registros encontrados' : 'Registros no encontrados',
        ];

        return response()->json($cines, $status);
    }
}
