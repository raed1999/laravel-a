<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id = null, $dob = null){
        return view('profile',[
            'id' => $id,
            'dob' => $dob,
        ]);
    }
}
