<div class="container-fluid table-parent">
    <div class="col-md-12 p-1 text-center">
        <label class="location-name" for="location">Data Kontrak</label>
    </div>

    <div>
        <label for="search">Search:</label>
        <input type="text" id="search" oninput="filterTable()">
    </div>

    <hr>

    <table class="table" id="dataTable">
        <thead class="text-center">

            @foreach ($dataMainCol[0] as $item)
            <tr>
                <td style="vertical-align : middle;text-align:center;" rowspan="3">{{ $item }}</td>
            </tr>
            @endforeach
            <tr>
                <td>TEKNISI</td>
                @foreach ($dataFirstHeader[0] as $item)
                <td style="vertical-align : middle;text-align:center;" colspan="4">{{ $item }}</td>
                @endforeach
                <td style="vertical-align : middle;text-align:center;" colspan="5">Sepeda Motor</td>
                @foreach ($dataFirstHeader2[0] as $item)
                <td style="vertical-align : middle;text-align:center;" colspan="4">{{ $item }}</td>
                @endforeach
            </tr>
            <tr>
                <td></td>
                @php
                $timesToLoop = 7;
                $timesToLoop2 = 82;
                @endphp
                @for ($i = 0; $i < $timesToLoop; $i++) @foreach ($dataSecondHeader[0] as $item) <td
                    style="vertical-align : middle;text-align:center;">{{ $item }}</td>
                    @endforeach
                    @endfor
                    <td style="vertical-align : middle;text-align:center;">RASIO</td>
                    <td style="vertical-align : middle;text-align:center;">KEBUTUHAN KONTRAK</td>
                    <td style="vertical-align : middle;text-align:center;">PEMENUHAN</td>
                    <td style="vertical-align : middle;text-align:center;">NATURA</td>
                    <td style="vertical-align : middle;text-align:center;">GAP</td>
                    @for ($i = 0; $i < $timesToLoop2; $i++) @foreach ($dataSecondHeader[0] as $item) <td
                        style="vertical-align : middle;text-align:center;">{{ $item }}</td>
                        @endforeach
                        @endfor
            </tr>


        </thead>
        <tbody>
            @for ($i = 0; $i < count($dataKontrak); $i++) <tr>
                @foreach ($dataKontrak[$i] as $item)
                <td style="vertical-align : middle;text-align:center;padding:0;">{{ $item }}</td>
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