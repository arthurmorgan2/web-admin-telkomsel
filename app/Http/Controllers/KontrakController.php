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
        //Fetch First Header
        $firstHeader = Sheets::spreadsheet($spreadsheetID)->sheet($speadsheetName)->range("C1:Z2")->get();
        $headerFirst = $firstHeader->pull(0);
        $valuesFirstHeader = Sheets::collection($headerFirst, $firstHeader);
        $dataFirstHeader = array_values($valuesFirstHeader->toArray());
        // dd($dataFirstHeader);
        //Fetch First Header
        $firstHeader2 = Sheets::spreadsheet($spreadsheetID)->sheet($speadsheetName)->range("AF1:MQ2")->get();
        $headerFirst2 = $firstHeader2->pull(0);
        $valuesFirstHeader2 = Sheets::collection($headerFirst2, $firstHeader2);
        $dataFirstHeader2 = array_values($valuesFirstHeader2->toArray());
        // dd($dataFirstHeader);

        // Fetch Second Header
        $secondHeader = Sheets::spreadsheet($spreadsheetID)->sheet($speadsheetName)->range("C3:F4")->get();
        $headerSecond = $secondHeader->pull(0);
        $valuesSecondHeader = Sheets::collection($headerSecond, $secondHeader);
        $dataSecondHeader = array_values($valuesSecondHeader->toArray());
        // dd($dataSecondHeader);

        // Fetch KONTRAK DATA
        $kontrak = Sheets::spreadsheet($spreadsheetID)->sheet($speadsheetName)->range("A5:MQ102")->get();
        $headerKontrak = $kontrak->pull(0);
        $valuesKontrak = Sheets::collection($headerKontrak, $kontrak);
        $dataKontrak = array_values($valuesKontrak->toArray());
        // dd($dataKontrak);

        return view('admin.data-kontrak', compact('dataMainCol', 'dataFirstHeader', 'dataFirstHeader2', 'dataSecondHeader', 'dataKontrak'));
    }
}
