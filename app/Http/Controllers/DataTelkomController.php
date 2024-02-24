<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\NteBaru;
use App\Models\Dismantling;
use App\Models\Refurbished;
use Revolution\Google\Sheets\Facades\Sheets;
use Yajra\DataTables\DataTables;

class DataTelkomController extends Controller
{
    public function showDataTelkom () {
        return view('admin.data-telkom');
    }

    public function fetchDataTelkom () {
        $ntebaru = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Report Laporan BGES R5 NEW')->range("A5:W20")->get();
        $headerBaru = $ntebaru->pull(0);
        $valuesBaru = Sheets::collection($headerBaru, $ntebaru);
        $dataBaru = array_values($valuesBaru->toArray());
        $slicedDataBaru = array_slice($dataBaru, 0, 14);
        $slicedDataBaruTotal = array_slice($dataBaru, 14, 1);
        //Google Sheet API DISMANTLING
        $dismantling = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Report Laporan BGES R5 NEW')->range("A26:W41")->get();
        $headerDismantling = $dismantling->pull(0);
        $valuesDismantling = Sheets::collection($headerDismantling, $dismantling);
        $dataDismantling = array_values($valuesDismantling->toArray());
        $slicedDataDismantling = array_slice($dataBaru, 0, 14);
        $slicedDataDismantlingTotal = array_slice($dataBaru, 14, 1);
        //Google Sheet API REFURBISHED
        $refurbished = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Report Laporan BGES R5 NEW')->range("A47:W62")->get();
        $headerRefurbished = $refurbished->pull(0);
        $valuesRefurbished = Sheets::collection($headerRefurbished, $refurbished);
        $dataRefurbished = array_values($valuesRefurbished->toArray());
        $slicedDataRefurbished = array_slice($dataBaru, 0, 14);
        $slicedDataRefurbishedTotal = array_slice($dataBaru, 14, 1);
        //Google Sheet API TOTAL ONT STB
        $total = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Report Laporan BGES R5 NEW')->range("A68:W83")->get();
        $headerTotal = $total->pull(0);
        $valuesTotal = Sheets::collection($headerTotal, $total);
        $dataTotal = array_values($valuesTotal->toArray());
        $slicedDataTotal = array_slice($dataTotal, 0, 14);
        $slicedDataTotals = array_slice($dataTotal, 14, 1);

        return view('admin.data-telkom', compact('slicedDataBaru', 'slicedDataBaruTotal', 'slicedDataDismantling', 'slicedDataDismantlingTotal', 'slicedDataRefurbished', 'slicedDataRefurbishedTotal',
    'slicedDataTotal', 'slicedDataTotals'
    ));

    }
}
