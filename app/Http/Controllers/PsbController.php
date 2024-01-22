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

        public function fetchDataPsb()
    {
         //DATA PSB
        $psb = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("B150:M163")->get();
        $header = $psb->pull(0);
        $values = Sheets::collection($header, $psb);
        $data = array_values($values->toArray());
        // dd($data);
        $total = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("B164:M165")->get();
        $headerTotal = $total->pull(0);
        $valuesTotal = Sheets::collection($headerTotal, $total);
        $dataTotal = array_values($valuesTotal->toArray());
        // dd($dataTotal);
        return view('admin.data-psb', compact('data', 'dataTotal'));
    }
}
