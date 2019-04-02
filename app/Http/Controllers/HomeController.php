<?php

namespace App\Http\Controllers;

use App\Exports\CustomerExport;
use App\User;
use Maatwebsite\Excel\Facades\Excel;
// use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('customers', compact('users'));
    }

    public function export()
    {
        return Excel::download(new CustomerExport(), 'users.xlsx');
    }
}
