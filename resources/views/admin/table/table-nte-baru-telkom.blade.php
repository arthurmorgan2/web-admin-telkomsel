<div class="container-fluid table-parent">
    <div class="col-md-12 p-1 text-center">
        <label class="location-name" for="location">NTE Baru</label>
    </div>

    <div>
        <label for="search">Search:</label>
        <input type="text" id="search" oninput="filterTable()">
    </div>

    <table class="table table-all table-bordered" id="dataTable">
        <thead class="text-center">
            <tr>
                {{-- <th style="vertical-align : middle;text-align:center;" rowspan="3">No</th> --}}
                <th class="column1"
                    style="vertical-align : middle;text-align:center;padding-left:7rem;padding-right:7rem" rowspan="3">
                    Witel</th>
                <th class="text-center ont-main-text bg-info" style="vertical-align : middle;text-align:center;"
                    rowspan="2">WMSL</th>
                <th class="text-center ont-main-text bg-danger" colspan="6">ONT PREMIUM</th>
                <th class="text-center ont-main-text bg-info" colspan="6">ONT DB</th>
                <th class="text-center ont-main-text cell-2" colspan="3">ONT SB</th>
                <th class="text-center ont-main-text bg-info"
                    style="vertical-align : middle;text-align:center; padding:0;" rowspan="3">TOTAL ONT</th>
                <th class="text-center ont-main-text column1" colspan="4">STB</th>
                <th class="text-center ont-main-text bg-info"
                    style="vertical-align : middle;text-align:center; padding:0;" rowspan="3">TOTAL STB</th>
            </tr>

            <tr>
                <th class="text-center ont-main-text bg-danger" colspan="2">ZTE</th>
                <th class="text-center ont-main-text bg-danger" colspan="2">HUAWEI</th>
                <th class="text-center ont-main-text bg-danger">FH</th>
                <th class="text-center ont-main-text bg-danger" style="padding: 0; vertical-align:middle;" rowspan="2">
                    TOTAL ONT PREMIUM</th>
                <th class="text-center ont-main-text bg-info">ZTE</th>
                <th class="text-center ont-main-text bg-info">HUAWEI</th>
                <th class="text-center ont-main-text bg-info" colspan="2">FH</th>
                <th class="text-center ont-main-text bg-info">NOKIA</th>
                <th class="text-center ont-main-text bg-info" style="padding: 0; vertical-align:middle;" rowspan="2">
                    TOTAL ONT DB</th>
                <th class="text-center ont-main-text cell-2">ZTE</th>
                <th class="text-center ont-main-text cell-2">HUAWEI</th>
                <th class="text-center ont-main-text cell-2" style="padding: 0; vertical-align:middle;" rowspan="2">
                    TOTAL SB</th>
                <th class="text-center ont-main-text column1" colspan="2">FH</th>
                <th class="text-center ont-main-text column1" colspan="2">ZTE</th>
            </tr>
            <tr class="ont-text">
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">WMSL_ONT
                    _ZTE_F670
                    _V2.0
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-danger">ONT_ZTE_
                    F670
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-danger">ONT_ZTE_
                    F670 V2.0
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-danger">ONT_HUAWEI
                    _HG8245U
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-danger">ONT_HUAWEI
                    HG8245W5
                    -6T
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-danger">ONT_FH
                    _HG6245N
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ONT_ZTE
                    _F670L
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ONT_HUAWEI
                    _HG8145V5
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ONT_FH
                    _HG6145F
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ONT_FH
                    _HG6145D2
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ONT_NOKIA
                    _G-2425G-A
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="cell-2">ONT_ZTE_
                    F609_V5.3
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="cell-2">ONT_HUAWEI
                    _HG8245H5
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="column1">STBIPTV_FH
                    _HG680FJ
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="column1">STBIPTV_FH
                    _HG680-P
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="column1">STB_ZTE_
                    ZX10_B866F
                    _V1.1
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="column1">
                    STB_ZTE
                    _B860H_
                    V5.0
                </th>

            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($slicedDataBaru); $i++) <tr>
                @foreach ($slicedDataBaru[$i] as $item)
                <td style="vertical-align : middle;text-align:center; padding:0;">{{ $item }}</td>
                @endforeach
                </tr>
                @endfor
                <tr>
                    @foreach ($slicedDataBaruTotal[0] as $key => $item)
                    <td class="cell-2" style="vertical-align: middle; text-align: center; padding: 0;">
                        {{
                        $item
                        }}
                    </td>
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
