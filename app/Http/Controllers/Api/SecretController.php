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
}
