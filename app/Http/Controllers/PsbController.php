<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;

class PsbController extends Controller
{
    public function showDataPsb()
    {
        return view('admin.data-psb');
    }

}
