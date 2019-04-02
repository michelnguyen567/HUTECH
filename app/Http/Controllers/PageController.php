<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getKD()
    {
        return view('pages.kiemduyet');
    }

    public function getDX()
    {
        return view('dexuat.index');
    }
}