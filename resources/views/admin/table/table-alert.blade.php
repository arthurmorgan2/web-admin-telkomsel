<div class="col-md-12 p-1 text-center">
    <label class="location-name" for="location">Data Alert</label>
</div>

<div>
    <label for="search">Search:</label>
    <input type="text" id="search" oninput="filterTable()">
</div>

<div class="container-fluid table-parent">
    <table class="table table-all table-bordered" id="dataTable">
        <thead class="text-center">
            <tr>
                <th class="column1"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;"
                    rowspan="2">
                    NO</th>
                <th class="column1"
                    style="vertical-align : middle;text-align:center;padding-left:6rem;padding-right:6rem;font-size:12px;"
                    rowspan="2">
                    WITEL</th>
                <th class="column1"
                    style="vertical-align : middle;text-align:center;padding-left:6rem;padding-right:6rem;font-size:12px; white-space:nowrap;"
                    rowspan="2">
                    WH SO</th>
                <th class="column1"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;"
                    rowspan="2">
                    JUMLAH
                    STO</th>
                <th class="column2"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;"
                    rowspan="2">
                    Capacity Max(unit)</th>
                <th class="column2"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;"
                    rowspan="2">
                    Capacity Status</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;" colspan="8">STOCK
                    SAAT INI NTE BARU</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;" colspan="4">
                    KEBUTUHAN PSB JATIM BALI NUSRA 20 HARI</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;" colspan="2">
                    STOCK DAYS ACTUAL PSB (20 HARI)</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;" colspan="2">
                    GAP KEBUTUHAN PSB (20 HARI)</th>
                <th class="text-center bg-success" style="vertical-align : middle;text-align:center;">
                    GAP KEBUTUHAN (15 HARI)</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center;">
                    GAP KEBUTUHAN (25 HARI)</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;" colspan="2">
                    KETERANGAN PSB (STOCK DAYS 14 HARI)</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;" colspan="2">
                    STOCK SAAT INI REFURBISHED</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;" colspan="4">
                    KEBUTUHAN GGN 15 HARI</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;" colspan="2">
                    DEVIASI KEBUTUHAN GGN</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;" colspan="2">
                    KETERANGAN GGN</th>
                <th class="text-center bg-warning" style="vertical-align : middle;text-align:center;" rowspan="2">
                    KETERANGAN</th>
                <th class="text-center bg-warning"
                    style="vertical-align : middle;text-align:center; white-space:nowrap;" rowspan="2">
                    KETERANGAN GGN</th>
            </tr>
            <tr style="font-size: 9px;">
                <th class="text-center bg-warning" style="vertical-align : middle;text-align:center;">ALL ONT</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center;">ONT VENDOR</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center;">ONT NOKIA SINGLE
                    BAND</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center;">ONT NOKIA DUAL
                    BAND</th>
                <th class="text-center bg-success" style="vertical-align : middle;text-align:center;">ONT DILUAR HOLD +
                    NOKIA</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB NEW</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB REFURBISHED</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB TOTAL</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">PS HARIAN ONT (PSB &
                    GGN)</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">PS HARIAN STB (PSB &
                    GGN)</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">DAYS AWAL</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB</th>
                <th class="text-center bg-success" style="vertical-align : middle;text-align:center;">STB</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center;">ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">GGN ONT HARIAN</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">GGN STB HARIAN</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($dataAlert); $i++) <tr>
                @foreach ($dataAlert[$i] as $item)
                <td style="vertical-align : middle;text-align:center;padding:0;">{{ $item }}</td>
                @endforeach
                </tr>
                @endfor

                <tr>
                    <td class="column1" style="vertical-align : middle;text-align:center; padding:0;" colspan="6">
                        TOTAL
                        STOCK WH SO
                        DENPASAR</td>
                    @foreach ($dataAlertTotal[0] as $item)
                    <td style="vertical-align : middle;text-align:center; padding:0; white-space:nowrap;">{{ $item
                        }}</td>
                    @endforeach

                </tr>
                @for ($i = 0; $i < count($dataAlert2); $i++) <tr>
                    @foreach ($dataAlert2[$i] as $item)
                    <td style="vertical-align : middle;text-align:center;padding:0; white-space:nowrap;">{{ $item }}
                    </td>
                    @endforeach
                    </tr>
                    @endfor

                    <tr>
                        <td class="column1" style="vertical-align : middle;text-align:center; padding:0;" colspan="6">
                            TOTAL STOCK WH SO SINGARAJA</td>
                        @foreach ($dataAlertTotal2[0] as $item)
                        <td style="vertical-align : middle;text-align:center; padding:0; white-space:nowrap;">{{
                            $item
                            }}</td>
                        @endforeach
                    </tr>
                    @for ($i = 0; $i < count($dataAlert3); $i++) <tr>
                        @foreach ($dataAlert3[$i] as $item)
                        <td style="vertical-align : middle;text-align:center;padding:0; white-space:nowrap;">{{ $item }}
                        </td>
                        @endforeach
                        </tr>
                        @endfor

                        <tr>
                            <td class="column1" style="vertical-align : middle;text-align:center; padding:0;"
                                colspan="6">
                                TOTAL STOCK WH SO MADIUN</td>
                            @foreach ($dataAlertTotal3[0] as $item)
                            <td style="vertical-align : middle;text-align:center; padding:0; white-space:nowrap;">{{
                                $item
                                }}</td>
                            @endforeach
                        </tr>
                        @for ($i = 0; $i < count($dataAlert4); $i++) <tr>
                            @foreach ($dataAlert4[$i] as $item)
                            <td style="vertical-align : middle;text-align:center;padding:0; white-space:nowrap;">{{
                                $item }}
                            </td>
                            @endforeach
                            </tr>
                            @endfor

                            <tr>
                                <td class="column1" style="vertical-align : middle;text-align:center; padding:0;"
                                    colspan="6">
                                    TOTAL STOCK WH SO MALANG</td>
                                @foreach ($dataAlertTotal4[0] as $item)
                                <td style="vertical-align : middle;text-align:center; padding:0; white-space:nowrap;">{{
                                    $item
                                    }}</td>
                                @endforeach
                            </tr>
                            @for ($i = 0; $i < count($dataAlert5); $i++) <tr>
                                @foreach ($dataAlert5[$i] as $item)
                                <td style="vertical-align : middle;text-align:center;padding:0; white-space:nowrap;">{{
                                    $item }}
                                </td>
                                @endforeach
                                </tr>
                                @endfor

                                <tr>
                                    <td class="column1" style="vertical-align : middle;text-align:center; padding:0;"
                                        colspan="6">
                                        TOTAL STOCK WH SO PASURUAN</td>
                                    @foreach ($dataAlertTotal5[0] as $item)
                                    <td
                                        style="vertical-align : middle;text-align:center; padding:0; white-space:nowrap;">
                                        {{
                                        $item
                                        }}</td>
                                    @endforeach
                                </tr>
                                @for ($i = 0; $i < count($dataAlert6); $i++) <tr>
                                    @foreach ($dataAlert6[$i] as $item)
                                    <td
                                        style="vertical-align : middle;text-align:center;padding:0; white-space:nowrap;">
                                        {{
                                        $item }}
                                    </td>
                                    @endforeach
                                    </tr>
                                    @endfor

                                    <tr>
                                        <td class="column1"
                                            style="vertical-align : middle;text-align:center; padding:0;" colspan="6">
                                            TOTAL STOCK WH SO SBS</td>
                                        @foreach ($dataAlertTotal6[0] as $item)
                                        <td
                                            style="vertical-align : middle;text-align:center; padding:0; white-space:nowrap;">
                                            {{
                                            $item
                                            }}</td>
                                        @endforeach
                                    </tr>
                                    @for ($i = 0; $i < count($dataAlert7); $i++) <tr>
                                        @foreach ($dataAlert7[$i] as $item)
                                        <td
                                            style="vertical-align : middle;text-align:center;padding:0; white-space:nowrap;">
                                            {{
                                            $item }}
                                        </td>
                                        @endforeach
                                        </tr>
                                        @endfor

                                        <tr>
                                            <td class="column1"
                                                style="vertical-align : middle;text-align:center; padding:0;"
                                                colspan="6">
                                                TOTAL STOCK WH SO KEDIRI</td>
                                            @foreach ($dataAlertTotal7[0] as $item)
                                            <td
                                                style="vertical-align : middle;text-align:center; padding:0; white-space:nowrap;">
                                                {{
                                                $item
                                                }}</td>
                                            @endforeach
                                        </tr>
                                        @for ($i = 0; $i < count($dataAlert8); $i++) <tr>
                                            @foreach ($dataAlert8[$i] as $item)
                                            <td
                                                style="vertical-align : middle;text-align:center;padding:0; white-space:nowrap;">
                                                {{
                                                $item }}
                                            </td>
                                            @endforeach
                                            </tr>
                                            @endfor

                                            <tr>
                                                <td class="column1"
                                                    style="vertical-align : middle;text-align:center; padding:0;"
                                                    colspan="6">
                                                    TOTAL STOCK WH SO SIDOARJO</td>
                                                @foreach ($dataAlertTotal8[0] as $item)
                                                <td
                                                    style="vertical-align : middle;text-align:center; padding:0; white-space:nowrap;">
                                                    {{
                                                    $item
                                                    }}</td>
                                                @endforeach
                                            </tr>
                                            @for ($i = 0; $i < count($dataAlert9); $i++) <tr>
                                                @foreach ($dataAlert9[$i] as $item)
                                                <td
                                                    style="vertical-align : middle;text-align:center;padding:0; white-space:nowrap;">
                                                    {{
                                                    $item }}
                                                </td>
                                                @endforeach
                                                </tr>
                                                @endfor

                                                <tr>
                                                    <td class="column1"
                                                        style="vertical-align : middle;text-align:center; padding:0;"
                                                        colspan="6">
                                                        TOTAL STOCK WH SO JEMBER</td>
                                                    @foreach ($dataAlertTotal9[0] as $item)
                                                    <td
                                                        style="vertical-align : middle;text-align:center; padding:0; white-space:nowrap;">
                                                        {{
                                                        $item
                                                        }}</td>
                                                    @endforeach
                                                </tr>
                                                @for ($i = 0; $i < count($dataAlert10); $i++) <tr>
                                                    @foreach ($dataAlert10[$i] as $item)
                                                    <td
                                                        style="vertical-align : middle;text-align:center;padding:0; white-space:nowrap;">
                                                        {{
                                                        $item }}
                                                    </td>
                                                    @endforeach
                                                    </tr>
                                                    @endfor

                                                    <tr>
                                                        <td class="column1"
                                                            style="vertical-align : middle;text-align:center; padding:0;"
                                                            colspan="6">
                                                            TOTAL STOCK WH SO MADURA</td>
                                                        @foreach ($dataAlertTotal10[0] as $item)
                                                        <td
                                                            style="vertical-align : middle;text-align:center; padding:0; white-space:nowrap;">
                                                            {{
                                                            $item
                                                            }}</td>
                                                        @endforeach
                                                    </tr>
                                                    @for ($i = 0; $i < count($dataAlert11); $i++) <tr>
                                                        @foreach ($dataAlert11[$i] as $item)
                                                        <td
                                                            style="vertical-align : middle;text-align:center;padding:0; white-space:nowrap;">
                                                            {{
                                                            $item }}
                                                        </td>
                                                        @endforeach
                                                        </tr>
                                                        @endfor

                                                        <tr>
                                                            <td class="column1"
                                                                style="vertical-align : middle;text-align:center; padding:0;"
                                                                colspan="6">
                                                                TOTAL STOCK WH SO MATARAM</td>
                                                            @foreach ($dataAlertTotal11[0] as $item)
                                                            <td
                                                                style="vertical-align : middle;text-align:center; padding:0; white-space:nowrap;">
                                                                {{
                                                                $item
                                                                }}</td>
                                                            @endforeach
                                                        </tr>
                                                        @for ($i = 0; $i < count($dataAlert12); $i++) <tr>
                                                            @foreach ($dataAlert12[$i] as $item)
                                                            <td
                                                                style="vertical-align : middle;text-align:center;padding:0; white-space:nowrap;">
                                                                {{
                                                                $item }}
                                                            </td>
                                                            @endforeach
                                                            </tr>
                                                            @endfor

                                                            <tr>
                                                                <td class="column1"
                                                                    style="vertical-align : middle;text-align:center; padding:0;"
                                                                    colspan="6">
                                                                    TOTAL STOCK WH SO KUPANG</td>
                                                                @foreach ($dataAlertTotal12[0] as $item)
                                                                <td
                                                                    style="vertical-align : middle;text-align:center; padding:0; white-space:nowrap;">
                                                                    {{
                                                                    $item
                                                                    }}</td>
                                                                @endforeach
                                                            </tr>

                                                            @for ($i = 0; $i < count($dataAlert13); $i++) <tr>
                                                                @foreach ($dataAlert13[$i] as $item)
                                                                <td
                                                                    style="vertical-align : middle;text-align:center;padding:0; white-space:nowrap;">
                                                                    {{
                                                                    $item }}
                                                                </td>
                                                                @endforeach
                                                                </tr>
                                                                @endfor

                                                                <tr>
                                                                    <td class="column1"
                                                                        style="vertical-align : middle;text-align:center; padding:0;"
                                                                        colspan="6">
                                                                        TOTAL STOCK WH SO SBU</td>
                                                                    @foreach ($dataAlertTotal13[0] as $item)
                                                                    <td
                                                                        style="vertical-align : middle;text-align:center; padding:0; white-space:nowrap;">
                                                                        {{
                                                                        $item
                                                                        }}</td>
                                                                    @endforeach
                                                                </tr>

                                                                @for ($i = 0; $i < count($dataAlert14); $i++) <tr>
                                                                    @foreach ($dataAlert14[$i] as $item)
                                                                    <td
                                                                        style="vertical-align : middle;text-align:center;padding:0; white-space:nowrap;">
                                                                        {{
                                                                        $item }}
                                                                    </td>
                                                                    @endforeach
                                                                    </tr>
                                                                    @endfor

                                                                    <tr>
                                                                        <td class="column1"
                                                                            style="vertical-align : middle;text-align:center; padding:0;"
                                                                            colspan="3">
                                                                            TOTAL</td>
                                                                        @foreach ($dataAlert15[0] as $item)
                                                                        <td
                                                                            style="vertical-align : middle;text-align:center; padding:0; white-space:nowrap;">
                                                                            {{
                                                                            $item
                                                                            }}</td>
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