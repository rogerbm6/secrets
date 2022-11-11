<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Secret;
use App\Http\Resources\SecretResource;

class SecretController extends Controller
{
    public function index()
    {
        
        return SecretResource::collection(Secret::orderBy('id','desc')->get());
    }

    public function store(Request $request)
    {
        $secret = Secret::create($request->post());

        return response()->json([
            'secret'=>$secret
        ]);
        
    }

    public function show($id)
    {
        $secret = Secret::find($id);
        return response()->json($secret);
    }

    public function destroy($id)
    {
        $secret = Secret::find($id);
        $secret->delete();
        return response()->json([
            'mensaje' => 'Secreto eliminado'
        ]);
        
    }
}
