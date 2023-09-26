<?php

namespace App\Http\Controllers\Clerk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClerkHomeController extends Controller
{
    public function index(){
        return view('clerk.home');
    }
}
