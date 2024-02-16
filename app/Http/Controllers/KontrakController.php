<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;

class KontrakController extends Controller
{
    public function showDataKontrak()
    {

        return view('admin.data-kontrak');
    }

      public function fetchKontrak()
    {
        $spreadsheetID ="1FSf7wwnq7XVqTmVkuvUv2fdS-YC8EoqTK3Ag6Ch7q9k";
        $speadsheetName = "Copy of REKAP";
        //Fetch Main Column
        $maincol = Sheets::spreadsheet($spreadsheetID)->sheet($speadsheetName)->range("A1:A100")->get();
        $headerMainCol = $maincol->pull(0);
        $valuesMainCol = Sheets::collection($headerMainCol, $maincol);
        $dataMainCol = array_values($valuesMainCol->toArray());
        // dd($dataMainCol);
        // Fetch KONTRAK DATA
        $kontrak = Sheets::spreadsheet($spreadsheetID)->sheet($speadsheetName)->range("A5:MQ102")->get();
        $headerKontrak = $kontrak->pull(0);
        $valuesKontrak = Sheets::collection($headerKontrak, $kontrak);
        $dataKontrak = array_values($valuesKontrak->toArray());
        // dd($dataKontrak);

        return view('admin.data-kontrak', compact('dataMainCol', 'dataKontrak'));
    }
}
