<div class="container-fluid table-parent">
    <div class="col-md-12 p-1 text-center">
        <label class="location-name" for="location">Dismantling</label>
    </div>

    <div>
        <label for="search">Search:</label>
        <input type="text" id="search2" oninput="filterTable2()">
    </div>

    <table class="table table-all table-bordered" id="dataTable2">
        <thead class="text-center">
            <tr>
                {{-- <th style="vertical-align : middle;text-align:center;" rowspan="3">No</th> --}}
                <th class="column1"
                    style="vertical-align : middle;text-align:center;padding-left:7rem;padding-right:7rem" rowspan="4">
                    Witel</th>
                <th class="text-center ont-main-text cell-2" colspan="16">ONT</th>
                <th class="cell-2" style="vertical-align : middle;text-align:center;" rowspan="4">GT</th>
                <th class="text-center ont-main-text bg-warning" colspan="6">STB</th>
                <th class="bg-warning" style="vertical-align : middle;text-align:center;" rowspan="4">GT</th>
                <th class="bg-info" style="vertical-align : middle;text-align:center;" rowspan="3" colspan="4">ORBIT
                </th>
                <th class="bg-info" style="vertical-align : middle;text-align:center;" rowspan="3" colspan="4">ADD ON
                </th>
                {{-- <th class="text-center ont-main-text bg-warning" colspan="1"></th>
                <th class="text-center ont-main-text bg-info" colspan="5"></th> --}}
            </tr>

            <tr>
                <th class="text-center ont-main-text cell-2" colspan="4">ONT SINGLE BAND</th>
                <th class="text-center ont-main-text bg-info" colspan="7">ONT DUAL BAND</th>
                <th class="text-center ont-main-text bg-danger" colspan="5">ONT PREMIUM</th>
                <th class="bg-warning" colspan="6"></th>
            </tr>

            <tr>
                <th style="padding: 0;" class="text-center ont-main-text cell-2">FH</th>
                <th style="padding: 0;" class="text-center cell-2">HW</th>
                <th style="padding: 0;" class="text-center cell-2">NOKIA</th>
                <th style="padding: 0;" class="text-center cell-2">ZTE</th>
                <th style="padding: 0;" class="text-center ont-main-text bg-info">FH</th>
                <th style="padding: 0;" class="text-center bg-info" colspan="2">HW</th>
                <th style="padding: 0;" class="text-center bg-info" colspan="2">ZTE</th>
                <th style="padding: 0;" class="text-center bg-info">FH</th>
                <th style="padding: 0;" class="text-center bg-info">NOKIA</th>
                <th style="padding: 0;" class="text-center bg-danger" colspan="2">HW</th>
                <th style="padding: 0;" class="text-center bg-danger" colspan="2">ZTE</th>
                <th style="padding: 0;" class="text-center bg-danger">FH</th>
                <th style="padding: 0;" class="text-center bg-warning" colspan="2">Fiberhome</th>
                <th style="padding: 0;" class="text-center bg-warning" colspan="4">ZTE</th>
            </tr>
            <tr class="ont-text">
                <th style="vertical-align : middle;text-align:center; padding:0;" class="cell-2">ONT_
                    FH
                    _HG6243C
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="cell-2">ONT_
                    HW
                    _HG8245H5
                </th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="cell-2">ONT_
                    NOKIA
                    _G240WL</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="cell-2">ONT_
                    ZTE
                    _F609_
                    V5.3</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ONT_
                    FH
                    _HG6145D2</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ONT_
                    HW
                    _HG8145V5</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ONT_
                    HW
                    _HG8145X6
                    -10</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ONT_
                    ZTE
                    _F670L</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ONT_
                    ZTE
                    _F6600P</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ONT_
                    FH
                    _HG6145F</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ONT_
                    NOKIA
                    _G-2425G-A</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-danger">ONT_
                    HW
                    _HG8245U</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-danger">ONT_
                    HW
                    HG8245W5
                    -6T</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-danger">ONT_
                    ZTE_
                    F670</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-danger">ONT_
                    ZTE_
                    F670
                    V2.0</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-danger">ONT_
                    FH
                    _HG6245N</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-warning">STP
                    IPTV
                    _FH_
                    HG680-P</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-warning">STP
                    IPTV
                    _FH_
                    HG680FJ</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-warning">STP
                    _ZTE_
                    ZX10_
                    B866F_
                    V1.1</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-warning">STP
                    IPTV
                    _ZTE_
                    B860H_
                    V2.1</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-warning">STP
                    IPTV
                    _ZTE_
                    B860H</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-warning">STP
                    _ZTE_
                    B860H_
                    V5.0</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ORBIT
                    REG</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ORBIT_SS
                    exROUTER
                    _HKM0128a</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">Orbit_IP
                    _ZTE_
                    MF920US</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">ORBIT SS
                    _ZTE_
                    K10_STAR
                    _Z2</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">KP
                    SMOOA</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">REMOTE</th>

            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($slicedDataDismantling); $i++) <tr>
                @foreach ($slicedDataDismantling[$i] as $item)
                <td style="vertical-align : middle;text-align:center; padding:0;">{{ $item }}</td>
                @endforeach
                </tr>
                @endfor
                <tr>
                    @foreach ($slicedDataDismantlingTotal[0] as $key => $item)
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
    function filterTable2() {
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("search2");
        filter = input.value.toUpperCase();
        table = document.getElementById("dataTable2");
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
