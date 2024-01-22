<div class="col-md-12 p-1 text-center">
    <label class="location-name" for="location">Data PSB</label>
</div>

<div>
    <label for="search">Search:</label>
    <input type="text" id="search" oninput="filterTable()">
</div>

<div class="container-fluid table-parent">
    <table class="table table-all table-bordered" id="dataTable">
        <thead class="text-center">
            <tr>
                <th class="bg-warning"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;"
                    colspan="12">
                    PREDIKSI KETAHANAN STOCK WH AREA + WH SO</th>
            </tr>
            <tr>
                <th class="column1"
                    style="vertical-align : middle;text-align:center;padding-left:8rem;padding-right:8rem;font-size:12px;"
                    rowspan="2">
                    WITEL</th>
                <th class="column1"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;"
                    colspan="6">
                    STOCK AREA</th>
                <th class="column1"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;"
                    rowspan="2">
                    RATA2 PS HARIAN ONT</th>
                <th class="column1"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;"
                    rowspan="2">
                    RATA2 PS HARIAN STB</th>
                <th class="bg-success"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;"
                    colspan="3">
                    PERKIRAAN STOCK DAYS</th>
            </tr>
            <tr>
                <th class="bg-warning"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;">
                    ALL ONT</th>
                <th class="bg-info"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;">
                    STB</th>
                <th class="bg-danger"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;">
                    ONT VENDOR</th>
                <th class="bg-danger"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;">
                    ONT NOKIA SINGLE BAND</th>
                <th class="bg-danger"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;">
                    ONT NOKIA DUAL BAND</th>
                <th class="bg-success"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;">
                    ONT READY</th>
                <th class="bg-warning"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;">
                    DAYS ALL ONT</th>
                <th class="bg-success"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;">
                    DAYS ONT READY</th>
                <th class="bg-info"
                    style="vertical-align : middle;text-align:center;padding-left:3rem;padding-right:3rem;font-size:12px;">
                    DAYS STB</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($data); $i++) <tr>
                @foreach ($data[$i] as $item)
                <td style="vertical-align : middle;text-align:center;padding:0;">{{ $item }}</td>
                @endforeach
                </tr>
                @endfor

                <tr>
                    @foreach ($dataTotal[0] as $item)
                    <td class="cell-2"
                        style="vertical-align : middle;text-align:center; padding:0; white-space:nowrap;">{{ $item
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