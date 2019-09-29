<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function about()
    {
        $name = "Bean";
        return view('pages.about', ['nama' => $name]);
    }
}
