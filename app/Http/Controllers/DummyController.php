<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\NteBaru;

class DummyController extends Controller
{
    public function showDataDummy()
    {
        return view('admin.data-dummy');
    }
}
