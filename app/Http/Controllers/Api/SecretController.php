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
        
        return SecretResource::collection(Secret::all());
    }

    public function store(Request $request)
    {
        $secret = Secret::create($request->post());

        return response()->json([
            'secret'=>$secret
        ]);
        
    }

    public function show(Secret $secret)
    {
        return SecretResource::collection($secret);
    }

    public function destoy(Secret $secret)
    {
        $secret->delete();
        return response()->json([
            'mensaje' => 'Secreto eliminado'
        ]);
        
    }
}
