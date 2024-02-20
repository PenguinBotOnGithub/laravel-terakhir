<?php

namespace App\Http\Controllers;

use App\Models\Extracurriculars;

class ExtracurricularsController extends Controller
{
    public function index()
    {
        return view("extracurricular", [
            "title" => "Extracurriculars",
            "extra" => Extracurriculars::all()
        ]);
    }
}
