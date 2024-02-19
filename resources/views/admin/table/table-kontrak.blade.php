<div class="container-fluid table-parent">
    <div class="col-md-12 p-1 text-center">
        <label class="location-name" for="location">Data Kontrak</label>
    </div>
    <div class="d-flex justify-content-between mx-2 align-items-center">
        <div class="">
            <form class="d-flex flex-row gap-2" action="{{ url('/data-kontrak/update-cell') }}" method="POST">
                @csrf
                <select class="custom-select" name="value" id="value">
                    <option value="" selected>Pilih Tempat</option>
                    @for ($i = 0; $i < count($dropdownValue); $i++) @foreach ($dropdownValue[$i] as $items ) <option
                        value="{{ $items }}">
                        {{ $items }}
                        </option> @endforeach
                        @endfor
                </select>
                {{-- <input class="form-control col-md-6" type="text" name="value" placeholder="Nama Tempat"> --}}
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
        </div>
        <div class="">
            <label for="search">Search:</label>
            <input type="text" id="search" oninput="filterTable()">
        </div>
    </div>

    <hr>

    <table class="table table-all" id="dataTable">
        <thead class="text-center">

            @foreach ($dataMainCol[0] as $item)
            <tr>
                <td class="cell-2"
                    style="vertical-align : middle;text-align:center; padding-left:6rem; padding-right:6rem"
                    rowspan="3">{{ $item }}</td>
            </tr>
            @endforeach
            <tr>
                <td class="bg-info" style="vertical-align : middle;text-align:center; padding:0;">TEKNISI
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">Splicer</td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">OTDR</td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">OTDR MINI</td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">KBM SKYWORKER</td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">KBM PICK UP</td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">KBM STATION</td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="5">Sepeda Motor</td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">OPTICAL FIBER
                    CLEANER PEN</td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">OPTICAL FIBER
                    STRIPPER</td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">LAN TESTER</td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">OPTICAL POWER
                    METER
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">OPTICAL LIGHT
                    SOURCE
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">VISUAL FAULT
                    LOCATOR
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">TANGGA TELESCOPIK
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">TOOLKIT
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">USB
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">CABLE CONSOLE
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">HANDPHONE
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">TAS RANSEL
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">JAS HUJAN (MANTEL)
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">MICRO PHONE TEST
                    [STANDARD]
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">INSERTION TOOLS
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">TONE CHECKER
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">LAPTOP
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">CPU
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">CRIMPING TOOL
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">ALAT
                    PEMBERSIH(SAPU, VACUM, DLL)
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">THERMO HYGROMETER
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">TANG AMPERE</td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">GENSET</td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">CANGKUL</td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">TANGGA SLIDING
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">BOR LISTRIK</td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">HEADLAMP
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">POWER BANK ONT
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">BATTERY CAPACITY
                    TESTER
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">PC
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">SAFETY HARNESS
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">HELM
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">CABLE FAULT
                    LOCATOR
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">GERGAJI BESI
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">JAS HUJAN
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">OPTICAL FIBER
                    IDENTIFIER (OFI)
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">SARUNG TANGAN
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">TOOLKIT SET
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">WORKING PLATFORM
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">ALAT UKUR KETEBALAN
                    TIANG
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">KBM FORKLIFT
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">TANG POTONG
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">TUBE CUTTER
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">SAFETY SHOES
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">WALKING METER
                    (MEASURE)
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">PRINTER
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">POMPA AIR
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">TELEPON TEST
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">TAS TOOLKIT
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">OPTICAL FIBER CLEANER
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">OPTICAL FIBER CLEAVER
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">AVOMETER
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">BAJU ANTI PANAS
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">OBENG
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">SENTER ANTI EXPLOSION
                </td>
                <td class="bg-warning" style="vertical-align : middle;text-align:center;" colspan="4">GROUNDING TESTER
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">VACUUM CLEANER
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">TRACK TANG
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">BACK PACK INDIHOME
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">WORKING BELT
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">TANGGA LIPAT
                    ALUMINIUM
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">SAFETY BELT
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">TANG BUAYA
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">TESPEN
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">BARCODE READER /
                    SCANNER
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">GPS
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">TROLI DORONG
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">TAKEL
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">BAND IT
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">CABLE SHEATH CUTTER
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">ALAT UKUR BROADBAND
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">GPON
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">GERGAJI MESIN
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">BARE FIBER
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">LEASEHOLD
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">LINGGIS
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">SABIT
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">PRINTER STANDAR
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">SPECIAL TOOLS ARC
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">DROP WIRE STRIPPER
                </td>
                <td class="bg-info" style="vertical-align : middle;text-align:center;" colspan="4">TENDA
                </td>
            </tr>
            <tr>
                <td>

                </td>
                @php
                $columns = [
                ['class' => 'column1', 'text' => 'RASIO'],
                ['class' => 'column1', 'text' => 'KK'],
                ['class' => 'bg-success', 'text' => 'PMNHN'],
                ['class' => 'bg-danger', 'text' => 'GAP']
                ];
                $timesToLoop = 6;
                $timesToLoop2 = 81;
                @endphp
                @for ($i = 0; $i < $timesToLoop; $i++) @foreach ($columns as $item) <td class="{{ $item['class'] }}"
                    style="vertical-align : middle;text-align:center; padding:0;">{{ $item['text'] }}</td>
                    @endforeach
                    @endfor
                    <td class="column1" style="vertical-align : middle;text-align:center; padding:0;">RASIO</td>
                    <td class="column1" style="vertical-align : middle;text-align:center; padding:0;">KK
                    </td>
                    <td class="bg-success" style="vertical-align : middle;text-align:center; padding:0;">PMNHN</td>
                    <td class="bg-success" style="vertical-align : middle;text-align:center; padding:0;">NATURA</td>
                    <td class="bg-danger" style="vertical-align : middle;text-align:center; padding:0;">GAP</td>
                    @for ($i = 0; $i < $timesToLoop2; $i++) @foreach ($columns as $item) <td
                        class="{{ $item['class'] }}" style="vertical-align : middle;text-align:center; padding:0;">{{
                        $item['text']
                        }}</td>
                        @endforeach
                        @endfor
            </tr>


        </thead>
        <tbody>
            @for ($i = 0; $i < count($dataKontrak); $i++) <tr>
                @foreach ($dataKontrak[$i] as $item)
                <td style="vertical-align : middle;text-align:center; padding:0;">{{ $item }}</td>
                @endforeach
                </tr>
                @endfor


        </tbody>
    </table>
</div>

<script>
    function filterTable() {
        var input, filter, table, tbody, tr, td, i, j, txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("dataTable");
        tbody = table.getElementsByTagName("tbody")[0]; // Get tbody element
        tr = tbody.getElementsByTagName("tr"); // Get all rows in tbody

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