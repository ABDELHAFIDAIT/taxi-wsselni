<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    public function show(){
        $driver = Driver::where('id_driver', Auth::user()->id)->get();
        return view('driver.profile', compact('driver'));
    }
}
