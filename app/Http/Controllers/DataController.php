<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NteBaru;
use App\Models\Dismantling;
use App\Http\Resources\NteBaruResource;
use App\Models\Refurbished;
use Revolution\Google\Sheets\Facades\Sheets;

class DataController extends Controller
{
    public function showDataNTE()
    {
        // Dummy Data
        // $ntebaru = NteBaru::all();
        $dismantling = Dismantling::all();
        $refurbished = Refurbished::all();
        //Google Sheet API NTE BARU
        $ntebaru = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Report Laporan TSEL R5')->range("A5:AA20")->get();
        $headerBaru = $ntebaru->pull(0);
        $valuesBaru = Sheets::collection($headerBaru, $ntebaru);
        $dataBaru = array_values($valuesBaru->toArray());
        // dd($dataBaru);
        //Google Sheet API DISMANTLING
        $dismantling = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Report Laporan TSEL R5')->range("A26:AA41")->get();
        $headerDismantling = $dismantling->pull(0);
        $valuesDismantling = Sheets::collection($headerDismantling, $dismantling);
        $dataDismantling = array_values($valuesDismantling->toArray());
        // dd($dataDismantling);
        //Google Sheet API REFURBISHED
        $refurbished = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Report Laporan TSEL R5')->range("A47:AA62")->get();
        $headerRefurbished = $refurbished->pull(0);
        $valuesRefurbished = Sheets::collection($headerRefurbished, $refurbished);
        $dataRefurbished = array_values($valuesRefurbished->toArray());
        // dd($dataDismantling);

        return view('admin.data-nte', compact('dataRefurbished', 'dataBaru', 'dataDismantling'));
    }
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

    // public function sumDataTotal()
    // {
    //     $sheets = Sheets::spreadsheet('1QD_lI7jeeJYnump2JXOT0WmJ_vZeD87GWQBDW783S2g')->sheet('ALL TYPE')->range("G104:AO105")->get();
    //     // $sheets = Sheets::spreadsheet('1QD_lI7jeeJYnump2JXOT0WmJ_vZeD87GWQBDW783S2g')->sheet('Sheet1')->range("A1:C4")->get();
    //     $header = $sheets->pull(0);
    //     $values = Sheets::collection($header, $sheets);
    //     $data = array_values($values->toArray());
    //     dd($data);
    //     return view('admin.data-all', compact('data'));
    // }
}
