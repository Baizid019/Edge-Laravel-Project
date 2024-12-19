<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $educations = Education::all();
        return view('welcome', compact('educations'));
    }



}
