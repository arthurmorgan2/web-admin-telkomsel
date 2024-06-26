<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\NteBaru;
use App\Models\Dismantling;
use App\Models\Refurbished;
use Revolution\Google\Sheets\Facades\Sheets;
use Yajra\DataTables\DataTables;

class DataController extends Controller
{
    // Data NTE
    public function showDataNTE()
    {
        // Dummy Data
        // $ntebaru = NteBaru::all();
        // $dismantling = Dismantling::all();
        // $refurbished = Refurbished::all();
        //Google Sheet API NTE BARU
        $ntebaru = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Report Laporan TSEL R5 TERBARU WEB')->range("A6:AE21")->get();
        $headerBaru = $ntebaru->pull(0);
        $valuesBaru = Sheets::collection($headerBaru, $ntebaru);
        $dataBaru = array_values($valuesBaru->toArray());
        $slicedDataBaru = array_slice($dataBaru, 0, 14);
        $slicedDataBaruTotal = array_slice($dataBaru, 14, 1);
        // dd($slicedDataBaru);
        //Google Sheet API DISMANTLING
        $dismantling = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Report Laporan TSEL R5 TERBARU WEB')->range("A28:AE43")->get();
        $headerDismantling = $dismantling->pull(0);
        $valuesDismantling = Sheets::collection($headerDismantling, $dismantling);
        $dataDismantling = array_values($valuesDismantling->toArray());
        $slicedDataDismantling = array_slice($dataBaru, 0, 14);
        $slicedDataDismantlingTotal = array_slice($dataBaru, 14, 1);
        // dd($dataDismantling);
        //Google Sheet API REFURBISHED
        $refurbished = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Report Laporan TSEL R5 TERBARU WEB')->range("A50:AE65")->get();
        $headerRefurbished = $refurbished->pull(0);
        $valuesRefurbished = Sheets::collection($headerRefurbished, $refurbished);
        $dataRefurbished = array_values($valuesRefurbished->toArray());
        $slicedDataRefurbished = array_slice($dataBaru, 0, 14);
        $slicedDataRefurbishedTotal = array_slice($dataBaru, 14, 1);
        // dd($dataDismantling);

        return view('admin.data-nte', compact('slicedDataBaru', 'slicedDataBaruTotal', 'slicedDataDismantling', 'slicedDataDismantlingTotal', 'slicedDataRefurbished', 'slicedDataRefurbishedTotal'));
    }
    // Data ALL
    public function showDataALL()
    {
        $all = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of ALL TYPE')->range("A5:AO103")->get();
        // $sheets = Sheets::spreadsheet('1QD_lI7jeeJYnump2JXOT0WmJ_vZeD87GWQBDW783S2g')->sheet('Sheet1')->range("A1:C4")->get();
        $total = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of ALL TYPE')->range("G104:AO105")->get();
        $headerALL = $all->pull(0);
        $headerTOTAL = $total->pull(0);
        $valuesALL = Sheets::collection($headerALL, $all);
        $valuesTOTAL = Sheets::collection($headerTOTAL, $total);
        $dataALL = array_values($valuesALL->toArray());
        $dataTOTAL = array_values($valuesTOTAL->toArray());
        // dd($dataALL);
        // dd($dataTOTAL);
        return view('admin.data-all', compact('dataALL', 'dataTOTAL'));
    }
}
