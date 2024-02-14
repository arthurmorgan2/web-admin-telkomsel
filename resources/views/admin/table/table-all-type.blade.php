<div class="col-md-12 p-1 text-center">
    <label class="location-name" for="location">Data ALL TYPE</label>
</div>

<div>
    <label for="search">Search:</label>
    <input type="text" id="search" oninput="filterTable()">
</div>

<div class="container-fluid table-parent">
    <table class="table table-all table-bordered" id="dataTable">
        <thead class="text-center">
            <tr>

                <th class="cell-1"
                    style="vertical-align : middle;text-align:center;padding-left:2rem;padding-right:2rem;font-size:12px;"
                    rowspan="4">
                    AREA</th>
                <th class="cell-1"
                    style="vertical-align : middle;text-align:center;padding-left:1rem; padding-right:1rem;font-size:12px;"
                    rowspan="4">REGIONAL</th>
                <th class="bg-warning"
                    style="vertical-align : middle;text-align:center;padding-left:1rem; padding-right:1rem;font-size:12px;"
                    rowspan="4">BRANCH</th>
                <th class="bg-warning"
                    style="vertical-align : middle;text-align:center;font-size:12px;padding-left:3rem; padding-right:3rem;"
                    rowspan="4">
                    CLUSTER</th>
                <th class="cell-1"
                    style="vertical-align : middle;text-align:center;padding-left:7rem;padding-right:7rem;font-size:12px;"
                    rowspan="4">WITEL</th>
                <th class="cell-1"
                    style="vertical-align : middle;text-align:center;padding-left:7rem; padding-right:7rem;white-space:nowrap;font-size:12px;"
                    rowspan="4">WH SO</th>
                <th class="bg-warning" style="vertical-align : middle;text-align:center;font-size:12px;" colspan="17">
                    STOCK
                    NOKIA &
                    HOLD</th>
                <th class="bg-danger" style="vertical-align : middle;text-align:center;font-size:12px;" colspan="18">
                    STOCK
                    READY TO
                    BE USED</th>
                {{-- <th style="vertical-align : middle;text-align:center;" colspan="2"></th> --}}
            </tr>
            <tr>
                <th class="text-center" style="vertical-align : middle;text-align:center; padding:0;" colspan="3">ZTE
                </th>
                <th class="text-center" style="vertical-align : middle;text-align:center; padding:0;" colspan="4">HUAWEI
                </th>
                <th class="text-center" style="vertical-align : middle;text-align:center; padding:0;" colspan="2">NOKIA
                </th>
                <th class="text-center" style="vertical-align : middle;text-align:center; padding:0;" colspan="5">FH
                </th>
                <th class="text-center bg-success" style="vertical-align : middle;text-align:center; padding:0;"
                    colspan="3">
                    TOTAL</th>
                <th class="text-center" style="vertical-align : middle;text-align:center; padding:0;" colspan="4">ZTE
                </th>
                <th class="text-center" style="vertical-align : middle;text-align:center; padding:0;" colspan="3">HUAWEI
                </th>
                <th class="text-center" style="vertical-align : middle;text-align:center; padding:0;" colspan="2">NOKIA
                </th>
                <th class="text-center" style="vertical-align : middle;text-align:center; padding:0;" colspan="4">FH
                </th>
                <th class="text-center bg-success" style="vertical-align : middle;text-align:center; padding:0;"
                    colspan="3">
                    TOTAL</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center; padding:0;"
                    rowspan="3">PS
                    HARIAN</th>
                <th class="text-center cell-3" style="vertical-align : middle;text-align:center; padding:0;"
                    rowspan="3">STOCK
                    DAYS
                    (DARI STOCK
                    READY TO USED)</th>

            </tr>
            <tr style="font-size: 9px">

                <th class="text-center cell-2" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _ZTE
                    _F609_
                    V5.3</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _ZTE
                    _F670</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _ZTE
                    _F670_
                    V2.0</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _ZTE
                    _F670L</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _HUAWEI
                    _HG8145V5</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _HUAWEI
                    _HG8245U</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _HUAWEI
                    _HG8245W5_
                    6T</th>
                <th class="text-center cell-2" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _HUAWEI
                    _HG8245H5</th>
                <th class="text-center cell-2" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _NOKIA
                    _G240WL</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _NOKIA
                    _G_2425G
                    _A</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _FH
                    _HG6145D2</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _FH
                    _HG6145F</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _FH
                    _HG6245N</th>
                <th class="text-center cell-2" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _FH
                    _HG6243C</th>
                <th class="text-center cell-2" style="vertical-align : middle;text-align:center; padding:0;"
                    rowspan="2">SB</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;"
                    rowspan="2">DB</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;"
                    rowspan="2">PM
                </th>
                <th class="text-center cell-2" style="vertical-align : middle;text-align:center; padding:0;">ONT_
                    ZTE
                    _F609_
                    V5.3</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _ZTE
                    _F670</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _ZTE
                    _F670_
                    V2.0</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _ZTE
                    _F670L</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _HUAWEI
                    _HG8145V5</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _HUAWEI
                    _HG8245U</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _HUAWEI
                    _HG8245W5
                    _6T</th>
                <th class="text-center cell-2" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _HUAWEI
                    _HG8245H5</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _NOKIA
                    _G_2425G
                    _A</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _FH
                    _HG6145D2</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _FH
                    _HG6145F</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _FH
                    _HG6245N</th>
                <th class="text-center cell-2" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _FH
                    _HG6245N</th>
                <th class="texts-center cell-2" style="vertical-align : middle;text-align:center; padding:0;"
                    rowspan="2">SB</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;"
                    rowspan="2">DB</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;"
                    rowspan="2">PM
                </th>
            </tr>
            <tr style="font-size: 9px">
                <th class="text-center cell-2" style="vertical-align : middle;text-align:center; padding:0;">SB</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">PM</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">PM</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">DB</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">DB</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">PM</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">PM</th>
                <th class="text-center cell-2" style="vertical-align : middle;text-align:center; padding:0;">SB</th>
                <th class="text-center cell-2" style="vertical-align : middle;text-align:center; padding:0;">SB</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">DB</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">DB</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">DB</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">PM</th>
                <th class="text-center cell-2" style="vertical-align : middle;text-align:center; padding:0;">SB</th>
                <th class="text-center cell-2" style="vertical-align : middle;text-align:center; padding:0;">SB</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">PM</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">PM</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">DB</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">DB</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">PM</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">PM</th>
                <th class="text-center cell-2" style="vertical-align : middle;text-align:center; padding:0;">SB</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">DB</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">DB</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">DB</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center; padding:0;">PM</th>
                <th class="text-center cell-2" style="vertical-align : middle;text-align:center; padding:0;">SB</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($dataALL); $i++) <tr>
                @foreach ($dataALL[$i] as $item)
                <td style="vertical-align : middle;text-align:center;padding:0;">{{ $item }}</td>
                @endforeach
                </tr>
                @endfor
                {{-- @foreach ($data as $value)
                <tr>
                    <td>
                        {{ data_get($value, 'AREA') }}
                    </td>
                </tr>
                @endforeach --}}

                <tr>
                    <td class="cell-2" style="vertical-align : middle;text-align:center;" colspan="6">TOTAL</td>
                    @foreach ($dataTOTAL[0] as $item)
                    <td class="cell-2" style="vertical-align : middle;text-align:center;">{{ $item }}</td>
                    @endforeach
                </tr>

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