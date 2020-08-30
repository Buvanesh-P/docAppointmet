<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\specialized;
use App\Appointment;
use App\Doctor;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $specialist = specialized::select('id', 'type')->orderBy('type','asc')->get();

        return view('home',compact('specialist'));

    }
}
