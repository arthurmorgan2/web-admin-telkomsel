<div class="col-md-12 p-1 text-center">
    <label class="location-name" for="location">NTE Baru</label>
</div>

<table class="table table-bordered">
    <thead class="text-center">
        <tr>
            {{-- <th style="vertical-align : middle;text-align:center;" rowspan="3">No</th> --}}
            <th class="column1" style="vertical-align : middle;text-align:center;" rowspan="3">Witel</th>
            <th class="text-center ont-main-text" colspan="15">ONT</th>

        </tr>

        <tr>
            <th class="text-center ont-main-text" colspan="4">Fiberhome</th>
            <th class="text-center" colspan="4">Huawei</th>
            <th class="text-center" colspan="2">Nokia</th>
            <th class="text-center" colspan="4">ZTE</th>
            <th rowspan="3">Grand Total</th>

        </tr>
        <tr class="ont-text">
            {{-- Fiberhome --}}
            <th class="bg-info">ONT
                _FIBERHOME
                _HG6145D2</th>
            <th class="bg-info">ONT
                _FIBERHOME
                _HG6145F</th>
            <th class="bg-danger">ONT
                _FIBERHOME
                _HG6245N</th>
            <th>ONT
                _FIBERHOME
                _HG6243C</th>
            {{-- Huawei --}}
            <th class="bg-info">ONT
                _HUAWEI
                _HG8145V5</th>
            <th class="bg-info">ONT
                _HUAWEI_
                HG8245U</th>
            <th class="bg-danger">ONT
                _HUAWEI
                HG8245W5-6T</th>
            <th>ONT
                _HUAWEI
                _HG8245H5</th>
            {{-- Nokia --}}
            <th>ONT
                _NOKIA_
                G240WL</th>
            <th class="bg-info">ONT
                _NOKIA_
                G-2425G-A</th>
            {{-- ZTE --}}
            <th>ONT
                _ZTE_F609
                _V5.3</th>
            <th class="bg-info">ONT
                _ZTE_
                F670</th>
            <th class="bg-info">ONT
                _ZTE_
                F670
                V2.0</th>
            <th class="bg-danger">ONT
                _ZTE_
                F670L</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ntebaru as $item)
            <tr>
                <td style="vertical-align : middle;text-align:center;">{{ $item->witel }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->ONT_FIBERHOME_HG6145D2 }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->ONT_FIBERHOME_HG6145F }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->ONT_FIBERHOME_HG6245N }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->ONT_FIBERHOME_HG6243C }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->ONT_HUAWEI_HG8145V5 }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->ONT_HUAWEI_HG8245U }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->ONT_HUAWEI_HG8245W5_6T }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->ONT_HUAWEI_HG8245H5 }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->ONT_NOKIA_G240WL }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->ONT_NOKIA_G_2425G_A }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->ONT_ZTE_F609_V5_3 }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->ONT_ZTE_F670 }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->ONT_ZTE_F670_V2_0 }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->ONT_ZTE_F670L }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->grand_total_1 }}</td>
            </tr>
        @endforeach
        {{-- <tr>
            <td style="vertical-align : middle;text-align:center;" colspan="2">Total</td>
            @foreach ($ntebaru as $item)
                <td>{{ $item->total }}</td>
            @endforeach
        </tr> --}}

    </tbody>

</table>

<table class="table table-bordered">
    <thead class="text-center">
        <tr>
            {{-- <th style="vertical-align : middle;text-align:center;" rowspan="3">No</th> --}}
            <th class="column1" style="vertical-align : middle;text-align:center;" rowspan="3">Witel</th>
            <th class="text-center ont-main-text bg-warning" colspan="3">STB</th>

        </tr>

        <tr>
            <th class="text-center ont-main-text bg-warning" colspan="1">Fiberhome</th>
            <th class="text-center ont-main-text bg-warning" colspan="2">ZTE</th>
            <th style="vertical-align : middle;text-align:center;" rowspan="3">Grand Total</th>
            <th class="text-center ont-main-text bg-info" colspan="4">Orbit</th>
        </tr>
        <tr class="ont-text">
            {{-- Fiberhome --}}
            <th class="bg-warning">SetTopBoxIPTV
                _FIBERHOME_
                HG680FJ</th>
            {{-- ZTE --}}
            <th class="bg-warning">SetTopBox_ZTE_
                ZX10_B866F_
                V1.1</th>
            <th class="bg-warning">SetTopBox_ZTE_
                B860H_
                V5.0</th>
            {{-- Orbit --}}
            <th class="bg-info">ORBIT REGULER</th>
            <th class="bg-info">ORBIT_SS ex
                ROUTER_HKM0128a</th>
            <th class="bg-info">Orbit_IP_
                ZTE_
                MF920US</th>
            <th class="bg-info">KARTU PERDANA
                SMOOA</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($ntebaru as $item)
            <tr>
                <td style="vertical-align : middle;text-align:center;">{{ $item->witel }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->SetTopBoxIPTV_FIBERHOME_HG680FJ }}
                </td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->SetTopBox_ZTE_ZX10_B866F_V1_1 }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->SetTopBox_ZTE_B860H_V5_0 }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->grand_total_2 }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->ORBIT_REGULER }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->ORBIT_SS_ex_ROUTER_HKM0128a }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->Orbit_IP_ZTE_MF920US }}</td>
                <td style="vertical-align : middle;text-align:center;">{{ $item->KARTU_PERDANA_SMOOA }}</td>
            </tr>
        @endforeach


    </tbody>
</table>
