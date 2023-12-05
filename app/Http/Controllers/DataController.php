<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NteBaru;
use App\Models\Dismantling;
use App\Http\Resources\NteBaruResource;
use App\Models\Refurbished;

class DataController extends Controller
{
    public function showData()
    {
        $ntebaru = NteBaru::all();
        $dismantling = Dismantling::all();
        $refurbished = Refurbished::all();

        return view('admin.data-nte', compact('ntebaru', 'dismantling', 'refurbished'));
    }
}
