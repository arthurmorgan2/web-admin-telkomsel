<div class="container-fluid table-parent">
    <div class="col-md-12 p-1 text-center">
        <label class="location-name" for="location">Refurbished</label>
    </div>

    <div>
        <label for="search">Search:</label>
        <input type="text" id="search3" oninput="filterTable3()">
    </div>

    <table class="table table-all table-bordered" id="dataTable3">
        <thead class="text-center">
            <tr>
                {{-- <th style="vertical-align : middle;text-align:center;" rowspan="3">No</th> --}}
                <th class="column1"
                    style="vertical-align : middle;text-align:center;padding-left:8rem;padding-right:8rem" rowspan="3">
                    Witel</th>
                <th class="text-center ont-main-text" colspan="15">ONT</th>
                <th class="text-center ont-main-text bg-warning" colspan="6">STB</th>
                <th class="text-center ont-main-text bg-warning" colspan="1"></th>
                <th class="text-center ont-main-text bg-info" colspan="5"></th>
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
                <th class="text-center ont-main-text bg-info" colspan="5">Orbit</th>
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
                <th class="px-1" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _NOKIA_
                    G240WL</th>
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info px-1">ONT
                    _NOKIA_
                    G-242
                    5G-A</th>
                {{-- ZTE --}}
                <th style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _ZTE_F609
                    _V5.3</th>
                <th class="bg-danger px-1" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _ZTE_F6
                    70</th>
                <th class="bg-danger" style="vertical-align : middle;text-align:center; padding:0;">ONT
                    _ZTE_F670
                    V2.0</th>
                <th class="bg-info px-2" style="vertical-align : middle;text-align:center; padding:0;">ONT
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
                <th style="vertical-align : middle;text-align:center; padding:0;" class="bg-info">REMOTE</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($slicedDataRefurbished); $i++) <tr>
                @foreach ($slicedDataRefurbished[$i] as $item)
                <td style="vertical-align : middle;text-align:center; padding:0;">{{ $item }}</td>
                @endforeach
                </tr>
                @endfor
                <tr>
                    @foreach ($slicedDataRefurbishedTotal[0] as $key => $item)
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
    function filterTable3() {
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("search3");
        filter = input.value.toUpperCase();
        table = document.getElementById("dataTable3");
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