<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;

class AlertController extends Controller
{
     // Data Alert
    public function showDataAlert()
    {
        return view('admin.data-alert');
    }

    public function fetchAlert()
    {
        $spreadsheetID ="1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A";
        $speadsheetName = "Copy of Stock ALERT R5 TSEL new";
        //DATA PSB
        $psb = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("B124:N138")->get();
        $header = $psb->pull(0);
        $values = Sheets::collection($header, $psb);
        $dataPsb = array_values($values->toArray());
        //DATA ALERT
        $alert = Sheets::spreadsheet($spreadsheetID)->sheet($speadsheetName)->range("A6:AM118")->get();
        $headerAlert = $alert->pull(0);
        $valuesAlert = Sheets::collection($headerAlert, $alert);
        $dataAlert = array_values($valuesAlert->toArray());


        $slicedDataPsb = array_slice($dataPsb, 0, 13);
        $slicedDataPsbTotal = array_slice($dataPsb, 13, 1);
        $slicedDataAlert = array_slice($dataAlert, 0, 5);
        $slicedDataAlert2 = array_slice($dataAlert, 6, 5);
        $slicedDataAlert3 = array_slice($dataAlert, 12, 8);
        $slicedDataAlert4 = array_slice($dataAlert, 21, 9);
        $slicedDataAlert5 = array_slice($dataAlert, 31, 4);
        $slicedDataAlert6 = array_slice($dataAlert, 36, 9);
        $slicedDataAlert7 = array_slice($dataAlert, 46, 10);
        $slicedDataAlert8 = array_slice($dataAlert, 57, 6);
        $slicedDataAlert9 = array_slice($dataAlert, 64, 10);
        $slicedDataAlert10 = array_slice($dataAlert, 75, 5);
        $slicedDataAlert11 = array_slice($dataAlert, 81, 8);
        $slicedDataAlert12 = array_slice($dataAlert, 90, 5);
        $slicedDataAlert13 = array_slice($dataAlert, 96, 13);
        $slicedDataAlert14 = array_slice($dataAlert, 110, 1);
        $slicedDataTotal = array_slice($dataAlert, 5, 1);
        $slicedDataTotal2 = array_slice($dataAlert, 11, 1);
        $slicedDataTotal3 = array_slice($dataAlert, 20, 1);
        $slicedDataTotal4 = array_slice($dataAlert, 30, 1);
        $slicedDataTotal5 = array_slice($dataAlert, 35, 1);
        $slicedDataTotal6 = array_slice($dataAlert, 45, 1);
        $slicedDataTotal7 = array_slice($dataAlert, 56, 1);
        $slicedDataTotal8 = array_slice($dataAlert, 63, 1);
        $slicedDataTotal9 = array_slice($dataAlert, 74, 1);
        $slicedDataTotal10 = array_slice($dataAlert, 80, 1);
        $slicedDataTotal11 = array_slice($dataAlert, 89, 1);
        $slicedDataTotal12 = array_slice($dataAlert, 95, 1);
        $slicedDataTotal13 = array_slice($dataAlert, 109, 1);
        $slicedDataTotal14 = array_slice($dataAlert, 111, 1);
        // dd($slicedDataAlert14);

        return view('admin.data-alert', compact('dataAlert', 'slicedDataAlert', 'slicedDataTotal', 'slicedDataAlert2', 'slicedDataTotal2', 'slicedDataAlert3', 'slicedDataTotal3', 'slicedDataAlert4', 'slicedDataTotal4', 'slicedDataAlert5', 'slicedDataTotal5', 'slicedDataAlert6', 'slicedDataTotal6', 'slicedDataAlert7', 'slicedDataTotal7', 'slicedDataAlert8', 'slicedDataTotal8',
    'slicedDataAlert9', 'slicedDataTotal9', 'slicedDataAlert10', 'slicedDataTotal10', 'slicedDataAlert11', 'slicedDataTotal11', 'slicedDataAlert12', 'slicedDataTotal12', 'slicedDataAlert13', 'slicedDataTotal13',
    'slicedDataAlert14', 'slicedDataTotal14', 'slicedDataPsb', 'slicedDataPsbTotal'
    ));

    }
}
