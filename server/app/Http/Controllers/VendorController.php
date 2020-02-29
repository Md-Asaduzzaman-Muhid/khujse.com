<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class VendorController extends Controller
{
    public function index(){
        return User::all();
    }
    public function store( Request $request ){
        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'image_url' => $request->image_url,
            
        ]);
        return response()->json(['message' => 'success'], 200);
    }
}
