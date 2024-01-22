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
        //DATA ALERT 1
        $alert = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("A5:AL10")->get();
        $headerAlert = $alert->pull(0);
        $valuesAlert = Sheets::collection($headerAlert, $alert);
        $dataAlert = array_values($valuesAlert->toArray());
        // dd($dataAlert);
        $alertTotal = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("G11:AL12")->get();
        $headerAlertTotal = $alertTotal->pull(0);
        $valuesAlertTotal = Sheets::collection($headerAlertTotal, $alertTotal);
        $dataAlertTotal = array_values($valuesAlertTotal->toArray());
        // dd($dataAlertTotal);

        //DATA ALERT2
        $alert2 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("A13:AL18")->get();
        $headerAlert2 = $alert2->pull(0);
        $valuesAlert2 = Sheets::collection($headerAlert2, $alert2);
        $dataAlert2 = array_values($valuesAlert2->toArray());
        // dd($dataAlert);
        $alertTotal2 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("G19:AL20")->get();
        $headerAlertTotal2 = $alertTotal2->pull(0);
        $valuesAlertTotal2 = Sheets::collection($headerAlertTotal2, $alertTotal2);
        $dataAlertTotal2 = array_values($valuesAlertTotal2->toArray());
        // dd($dataAlertTotal2);

        //DATA ALERT3
        $alert3 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("A21:AL29")->get();
        $headerAlert3 = $alert3->pull(0);
        $valuesAlert3 = Sheets::collection($headerAlert3, $alert3);
        $dataAlert3 = array_values($valuesAlert3->toArray());
        // dd($dataAlert);
        $alertTotal3 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("G30:AL31")->get();
        $headerAlertTotal3 = $alertTotal3->pull(0);
        $valuesAlertTotal3 = Sheets::collection($headerAlertTotal3, $alertTotal3);
        $dataAlertTotal3 = array_values($valuesAlertTotal3->toArray());
        // dd($dataAlertTotal);

        //DATA ALERT4
        $alert4 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("A32:AL41")->get();
        $headerAlert4 = $alert4->pull(0);
        $valuesAlert4 = Sheets::collection($headerAlert4, $alert4);
        $dataAlert4 = array_values($valuesAlert4->toArray());
        // dd($dataAlert);
        $alertTotal4 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("G42:AL43")->get();
        $headerAlertTotal4 = $alertTotal4->pull(0);
        $valuesAlertTotal4 = Sheets::collection($headerAlertTotal4, $alertTotal4);
        $dataAlertTotal4 = array_values($valuesAlertTotal4->toArray());
        // dd($dataAlertTotal);

        //DATA ALERT4
        $alert4 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("A32:AL41")->get();
        $headerAlert4 = $alert4->pull(0);
        $valuesAlert4 = Sheets::collection($headerAlert4, $alert4);
        $dataAlert4 = array_values($valuesAlert4->toArray());
        // dd($dataAlert);
        $alertTotal4 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("G42:AL43")->get();
        $headerAlertTotal4 = $alertTotal4->pull(0);
        $valuesAlertTotal4 = Sheets::collection($headerAlertTotal4, $alertTotal4);
        $dataAlertTotal4 = array_values($valuesAlertTotal4->toArray());
        // dd($dataAlertTotal);

        //DATA ALERT5
        $alert5 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("A44:AL48")->get();
        $headerAlert5 = $alert5->pull(0);
        $valuesAlert5 = Sheets::collection($headerAlert5, $alert5);
        $dataAlert5 = array_values($valuesAlert5->toArray());
        // dd($dataAlert);
        $alertTotal5 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("G49:AL50")->get();
        $headerAlertTotal5 = $alertTotal5->pull(0);
        $valuesAlertTotal5 = Sheets::collection($headerAlertTotal5, $alertTotal5);
        $dataAlertTotal5 = array_values($valuesAlertTotal5->toArray());
        // dd($dataAlertTotal);

        //DATA ALERT6
        $alert6 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("A51:AL60")->get();
        $headerAlert6 = $alert6->pull(0);
        $valuesAlert6 = Sheets::collection($headerAlert6, $alert6);
        $dataAlert6 = array_values($valuesAlert6->toArray());
        // dd($dataAlert);
        $alertTotal6 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("A61:AL62")->get();
        $headerAlertTotal6 = $alertTotal6->pull(0);
        $valuesAlertTotal6 = Sheets::collection($headerAlertTotal6, $alertTotal6);
        $dataAlertTotal6 = array_values($valuesAlertTotal6->toArray());
        // dd($dataAlertTotal);

        //DATA ALERT6
        $alert6 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("A51:AL60")->get();
        $headerAlert6 = $alert6->pull(0);
        $valuesAlert6 = Sheets::collection($headerAlert6, $alert6);
        $dataAlert6 = array_values($valuesAlert6->toArray());
        // dd($dataAlert);
        $alertTotal6 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("G61:AL62")->get();
        $headerAlertTotal6 = $alertTotal6->pull(0);
        $valuesAlertTotal6 = Sheets::collection($headerAlertTotal6, $alertTotal6);
        $dataAlertTotal6 = array_values($valuesAlertTotal6->toArray());
        // dd($dataAlertTotal);

        //DATA ALERT7
        $alert7 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("A63:AL73")->get();
        $headerAlert7 = $alert7->pull(0);
        $valuesAlert7 = Sheets::collection($headerAlert7, $alert7);
        $dataAlert7 = array_values($valuesAlert7->toArray());
        // dd($dataAlert);
        $alertTotal7 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("G74:AL75")->get();
        $headerAlertTotal7 = $alertTotal7->pull(0);
        $valuesAlertTotal7 = Sheets::collection($headerAlertTotal7, $alertTotal7);
        $dataAlertTotal7 = array_values($valuesAlertTotal7->toArray());
        // dd($dataAlertTotal);

        //DATA ALERT8
        $alert8 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("A76:AL82")->get();
        $headerAlert8 = $alert8->pull(0);
        $valuesAlert8 = Sheets::collection($headerAlert8, $alert8);
        $dataAlert8 = array_values($valuesAlert8->toArray());
        // dd($dataAlert);
        $alertTotal8 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("G83:AL84")->get();
        $headerAlertTotal8 = $alertTotal8->pull(0);
        $valuesAlertTotal8 = Sheets::collection($headerAlertTotal8, $alertTotal8);
        $dataAlertTotal8 = array_values($valuesAlertTotal8->toArray());
        // dd($dataAlertTotal);

        //DATA ALERT9
        $alert9 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("A85:AL95")->get();
        $headerAlert9 = $alert9->pull(0);
        $valuesAlert9 = Sheets::collection($headerAlert9, $alert9);
        $dataAlert9 = array_values($valuesAlert9->toArray());
        // dd($dataAlert);
        $alertTotal9 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("G96:AL97")->get();
        $headerAlertTotal9 = $alertTotal9->pull(0);
        $valuesAlertTotal9 = Sheets::collection($headerAlertTotal9, $alertTotal9);
        $dataAlertTotal9 = array_values($valuesAlertTotal9->toArray());
        // dd($dataAlertTotal);

        //DATA ALERT10
        $alert10 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("A98:AL103")->get();
        $headerAlert10 = $alert10->pull(0);
        $valuesAlert10 = Sheets::collection($headerAlert10, $alert10);
        $dataAlert10 = array_values($valuesAlert10->toArray());
        // dd($dataAlert);
        $alertTotal10 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("G104:AL105")->get();
        $headerAlertTotal10 = $alertTotal10->pull(0);
        $valuesAlertTotal10 = Sheets::collection($headerAlertTotal10, $alertTotal10);
        $dataAlertTotal10 = array_values($valuesAlertTotal10->toArray());
        // dd($dataAlertTotal);

        //DATA ALERT11
        $alert11 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("A106:AL114")->get();
        $headerAlert11 = $alert11->pull(0);
        $valuesAlert11 = Sheets::collection($headerAlert11, $alert11);
        $dataAlert11 = array_values($valuesAlert11->toArray());
        // dd($dataAlert);
        $alertTotal11 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("G115:AL116")->get();
        $headerAlertTotal11 = $alertTotal11->pull(0);
        $valuesAlertTotal11 = Sheets::collection($headerAlertTotal11, $alertTotal11);
        $dataAlertTotal11 = array_values($valuesAlertTotal11->toArray());
        // dd($dataAlertTotal);

        //DATA ALERT12
        $alert12 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("A117:AL122")->get();
        $headerAlert12 = $alert12->pull(0);
        $valuesAlert12 = Sheets::collection($headerAlert12, $alert12);
        $dataAlert12 = array_values($valuesAlert12->toArray());
        // dd($dataAlert);
        $alertTotal12 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("G123:AL124")->get();
        $headerAlertTotal12 = $alertTotal12->pull(0);
        $valuesAlertTotal12 = Sheets::collection($headerAlertTotal12, $alertTotal12);
        $dataAlertTotal12 = array_values($valuesAlertTotal12->toArray());
        // dd($dataAlertTotal);

        //DATA ALERT13
        $alert13 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("A125:AL138")->get();
        $headerAlert13 = $alert13->pull(0);
        $valuesAlert13 = Sheets::collection($headerAlert13, $alert13);
        $dataAlert13 = array_values($valuesAlert13->toArray());
        // dd($dataAlert);
        $alertTotal13 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("G139:AL140")->get();
        $headerAlertTotal13 = $alertTotal13->pull(0);
        $valuesAlertTotal13 = Sheets::collection($headerAlertTotal13, $alertTotal13);
        $dataAlertTotal13 = array_values($valuesAlertTotal3->toArray());
        // dd($dataAlertTotal);

        //DATA ALERT14
        $alert14 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("A141:AL142")->get();
        $headerAlert14 = $alert14->pull(0);
        $valuesAlert14 = Sheets::collection($headerAlert14, $alert14);
        $dataAlert14 = array_values($valuesAlert14->toArray());
        // dd($dataAlert);
        //DATA ALERT15
        $alert15 = Sheets::spreadsheet('1UC7ghJHsFIQOms8htwVO37NBD5AO6Uo19xZwV00Sr8A')->sheet('Copy of Stock ALERT R5 TSEL new')->range("D143:AL144")->get();
        $headerAlert15 = $alert15->pull(0);
        $valuesAlert15 = Sheets::collection($headerAlert15, $alert15);
        $dataAlert15 = array_values($valuesAlert15->toArray());
        // dd($dataAlert);


        return view('admin.data-alert', compact(
            'dataAlert',
            'dataAlertTotal',
            'dataAlert2',
            'dataAlertTotal2',
            'dataAlert3',
            'dataAlertTotal3',
            'dataAlert4',
            'dataAlertTotal4',
            'dataAlert5',
            'dataAlertTotal5',
            'dataAlert6',
            'dataAlertTotal6',
            'dataAlert7',
            'dataAlertTotal7',
            'dataAlert8',
            'dataAlertTotal8',
            'dataAlert9',
            'dataAlertTotal9',
            'dataAlert10',
            'dataAlertTotal10',
            'dataAlert11',
            'dataAlertTotal11',
            'dataAlert12',
            'dataAlertTotal12',
            'dataAlert13',
            'dataAlertTotal13',
            'dataAlert14',
            'dataAlert15',
        ));

    }
}
