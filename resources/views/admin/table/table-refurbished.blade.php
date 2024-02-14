<div class="container-fluid table-parent">
    <div class="col-md-12 p-1 text-center">
        <label class="location-name" for="location">Refurbished</label>
    </div>

    <div>
        <label for="search">Search:</label>
        <input type="text" id="search" oninput="filterTable()">
    </div>

    <table class="table h-25 table-bordered" id="dataTable">
        <thead class="text-center">
            <tr>
                {{-- <th style="vertical-align : middle;text-align:center;" rowspan="3">No</th> --}}
                <th class="column1"
                    style="vertical-align : middle;text-align:center;padding-left:8rem;padding-right:8rem" rowspan="3">
                    Witel</th>
                <th class="text-center ont-main-text" colspan="15">ONT</th>
                <th class="text-center ont-main-text bg-warning" colspan="6">STB</th>
                <th class="text-center ont-main-text bg-warning" colspan="1"></th>
                <th class="text-center ont-main-text bg-info" colspan="4"></th>
            </tr>

            <tr>
                <th class="text-center ont-main-text" colspan="4">FH</th>
                <th class="text-center" colspan="4">Huawei</th>
                <th class="text-center" colspan="2">Nokia</th>
                <th class="text-center" colspan="4">ZTE</th>
                <th style="vertical-align : middle;text-align:center;" rowspan="3">GT</th>
                <th class="text-center ont-main-text bg-warning" colspan="2">FH</th>
                <th class="text-center ont-main-text bg-warning" colspan="4">ZTE</th>
                <th class="bg-warning" style="vertical-align : middle;text-align:center;" rowspan="3">GT</th>
                <th class="text-center ont-main-text bg-info" colspan="4">Orbit</th>
            </tr>
            <tr class="ont-text">
                {{-- Fiberhome --}}
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ONT
                    _FH
                    _HG6145D2</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ONT
                    _FH
                    _HG6145F</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-danger">ONT
                    _FH
                    _HG6245N</th>
                <th style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _FH
                    _HG6243C</th>
                {{-- Huawei --}}
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ONT
                    _HUAWEI
                    _HG8145V5</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-danger">ONT
                    _HUAWEI_
                    HG8245U</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-danger">ONT
                    _HUAWEI
                    HG8245W5-6T</th>
                <th style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _HUAWEI
                    _HG8245H5</th>
                {{-- Nokia --}}
                <th style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _NOKIA_
                    G240WL</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ONT
                    _NOKIA_
                    G-2425G-A</th>
                {{-- ZTE --}}
                <th style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _ZTE_F609
                    _V5.3</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-danger">ONT
                    _ZTE_
                    F670</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-danger">ONT
                    _ZTE_
                    F670
                    V2.0</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ONT
                    _ZTE_
                    F670L</th>
                {{-- Fiberhome --}}
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-warning">
                    STBIPTV
                    _FH_
                    HG680-P</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-warning">
                    STBIPTV
                    _FH_
                    HG680FJ</th>
                {{-- ZTE --}}
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-warning">
                    STB
                    _ZTE_
                    ZX10_
                    B866F_
                    V1.1
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-warning">
                    STBIPTV
                    _ZTE_
                    B860H_
                    V2.1
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-warning">
                    STBIPTV
                    _ZTE_
                    B860H</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-warning">
                    STB
                    _ZTE_
                    B860H_
                    V5.0</th>
                {{-- Orbit --}}
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ORBIT
                    REGULER</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ORBIT_SS
                    exROUTER_
                    HKM0128a</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">Orbit
                    _IP_
                    ZTE_
                    MF920US</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">KP
                    SMOOA</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($dataRefurbished); $i++) <tr>
                @foreach ($dataRefurbished[$i] as $item)
                <td style="vertical-align : middle;text-align:center; padding:0;">{{ $item }}</td>
                @endforeach
                </tr>
                @endfor
                {{-- @foreach ($ntebaru as $item)
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
                    <td style="vertical-align : middle;text-align:center;">{{ $item->SetTopBoxIPTV_FIBERHOME_HG680FJ }}
                    </td>
                    <td style="vertical-align : middle;text-align:center;">{{ $item->SetTopBox_ZTE_ZX10_B866F_V1_1 }}
                    </td>
                    <td style="vertical-align : middle;text-align:center;">{{ $item->SetTopBox_ZTE_B860H_V5_0 }}</td>
                    <td style="vertical-align : middle;text-align:center;">{{ $item->grand_total_2 }}</td>
                    <td style="vertical-align : middle;text-align:center;">{{ $item->ORBIT_REGULER }}</td>
                    <td style="vertical-align : middle;text-align:center;">{{ $item->ORBIT_SS_ex_ROUTER_HKM0128a }}</td>
                    <td style="vertical-align : middle;text-align:center;">{{ $item->Orbit_IP_ZTE_MF920US }}</td>
                    <td style="vertical-align : middle;text-align:center;">{{ $item->KARTU_PERDANA_SMOOA }}</td>
                </tr>
                @endforeach --}}
                {{-- <tr>
                    <td style="vertical-align : middle;text-align:center;" colspan="2">Total</td>
                    @foreach ($ntebaru as $item)
                    <td>{{ $item->total }}</td>
                    @endforeach
                </tr> --}}

        </tbody>

    </table>

</div>

<script>
    function filterTable() {
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("dataTable");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                if (td[j]) {
                    txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        break;
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    }
</script>