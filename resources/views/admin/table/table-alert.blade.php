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
                <th class="column1" style="vertical-align : middle;text-align:center;font-size:12px;" rowspan="2">
                    NO</th>
                <th class="column1"
                    style="vertical-align : middle;text-align:center;padding-left:7rem;padding-right:7rem;font-size:12px;"
                    rowspan="2">
                    WITEL</th>
                <th class="column1"
                    style="vertical-align : middle;text-align:center;padding-left:7rem;padding-right:7rem;font-size:12px; white-space:nowrap;"
                    rowspan="2">
                    WH SO</th>
                <th class="column1" style="vertical-align : middle;text-align:center;font-size:12px;" rowspan="2">
                    JUMLAH
                    STO</th>
                <th class="column2" style="vertical-align : middle;text-align:center;font-size:12px;" rowspan="2">
                    Capacity Max(unit)</th>
                <th class="column2" style="vertical-align : middle;text-align:center;font-size:12px;" rowspan="2">
                    Capacity Status</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;" colspan="9">STOCK
                    SAAT INI NTE BARU</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;" colspan="4">
                    KBTHN PSB JATIM BALI NUSRA 20 HR</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;" colspan="2">
                    SDA PSB (20 HR)</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center; padding:0;"
                    colspan="2">
                    GAP KBTHN PSB (20 HR)</th>
                <th class="text-center bg-success" style="vertical-align : middle;text-align:center; padding:0;">
                    GAP KBTHN (15 HR)</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center; padding:0;">
                    GAP KBTHN (25 HR)</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;" colspan="2">
                    KTRNGN PSB (STOCK DAYS 20 HR)</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;" colspan="2">
                    STOCK SAAT INI REFURBISHED</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;" colspan="4">
                    KBTHN GGN 15 HR</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;" colspan="2">
                    DEVIASI KBTHN GGN</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;" colspan="2">
                    KTRNGN GGN</th>
                <th class="text-center bg-warning" style="vertical-align : middle;text-align:center;" rowspan="2">
                    KTRNGN</th>
                <th class="text-center bg-warning"
                    style="vertical-align : middle;text-align:center; white-space:nowrap; padding-left:2rem; padding-right:2rem;"
                    rowspan="2">
                    KTRNGN GGN</th>
            </tr>
            <tr style="font-size: 9px;">
                <th class="text-center bg-warning" style="vertical-align : middle;text-align:center;">ALL ONT
                </th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center;">ONT VDR</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center;">ONT NOKIA SB</th>
                <th class="text-center bg-danger" style="vertical-align : middle;text-align:center;">ONT NOKIA DB</th>
                <th class="text-center bg-success" style="vertical-align : middle;text-align:center;">ONT LUAR HOLD
                </th>
                <th class="text-center bg-success" style="vertical-align : middle;text-align:center;">ONT READY NOKIA
                </th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB NEW</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB REFUR.</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB TOTAL</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">PS HRAN ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">PS HRAN STB</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB</th>
                <th class="text-center bg-success" style="vertical-align : middle;text-align:center;">STB</th>
                <th class="text-center bg-info" style="vertical-align : middle;text-align:center;">ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">GGN ONT HRAN</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">GGN STB HRAN</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">ONT</th>
                <th class="text-center column1" style="vertical-align : middle;text-align:center;">STB</th>
            </tr>
        </thead>
        <tbody>

            @for ($i = 0; $i < count($slicedDataAlert); $i++) <tr>
                @foreach ($slicedDataAlert[$i] as $key => $item)
                @php
                $decimalValue = false;
                if (is_numeric($item) && floor($item) != $item) {
                $decimalValue = true;
                }
                @endphp
                @php
                $isNegative = false;
                if ($item < 0) { $isNegative=true; }
                @endphp
                @if ($item == 'STOCK AMAN')
                <td class="bg-success" style="vertical-align : middle;text-align:center; padding:0;">{{ $item }}</td>
                @elseif ($item == 'AMAN')
                <td class="bg-success" style="vertical-align : middle;text-align:center; padding:0;">{{ $item }}</td>
                @elseif ($item == 'ALERT')
                <td class="bg-danger" style="vertical-align : middle;text-align:center; padding:0;">{{ $item }}</td>
                @elseif ($item == 'OVERLOAD')
                <td class="bg-danger" style="vertical-align : middle;text-align:center; padding:0;">{{ $item }}</td>
                @elseif ($key == 'CAPACITY')
                <td class="column1" style="vertical-align : middle;text-align:center; padding:0;">{{ $item }}</td>
                @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{ $item }}</td>
                @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                <td style="vertical-align: middle; text-align: center; padding: 0;">{{ $item }}</td>
                @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                    style="vertical-align : middle;text-align:center; padding:0;">{{ $item }}</td>
                    @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                        style="vertical-align : middle;text-align:center; padding:0;">{{ $item }}</td>

                        @else
                        <td style="vertical-align : middle;text-align:center; padding:0;">{{ $item }}</td>
                        @endif
                        @endforeach
                        </tr>
                        @endfor
                        <tr class="column1">
                            @foreach ($slicedDataTotal[0] as $key => $item)
                            @php
                            $decimalValue = false;
                            if (is_numeric($item) && floor($item) != $item) {
                            $decimalValue = true;
                            }
                            @endphp
                            @php
                            $isNegative = false;
                            if ($item < 0) { $isNegative=true; } @endphp
                            @if ($item == 'TOTAL STOCK WH SO DENPASAR')
                            <td style="vertical-align: middle; text-align: center; padding: 0;" colspan="3">{{
                                $item }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            @elseif ($item == '')
                            <td style="display: none"></td>
                            @elseif ($item == 'KEBUTUHAN TAG WH SO')
                            <td style="vertical-align: middle; text-align: center; padding: 0;" colspan="2">{{
                                $item }}</td>
                            @elseif ($item == 'KEBUTHAN DONOR WITEL')
                            <td style="vertical-align: middle; text-align: center; padding: 0;" colspan="2">{{
                                $item }}</td>
                            @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                            <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                $item }}</td>
                            @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                            <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                $item }}</td>
                            @elseif ($item < 20 && $key=='ONT1') <td
                                class="bg-danger" style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                }}</td>
                                @elseif ($item < 15 && $key=='STB1') <td
                                    class="bg-danger" style="vertical-align : middle;text-align:center; padding:0;">{{
                                    $item }}</td>
                                    @else
                                    <td style="vertical-align: middle; text-align: center; padding: 0;">{{ $item }}</td>
                                    @endif
                                    @endforeach
                        </tr>

                        @for ($i = 0; $i < count($slicedDataAlert2); $i++) <tr>
                            @foreach ($slicedDataAlert2[$i] as $key => $item)
                            @php
                            $decimalValue = false;
                            if (is_numeric($item) && floor($item) != $item) {
                            $decimalValue = true;
                            }
                            @endphp
                            @php
                            $isNegative = false;
                            if ($item < 0) { $isNegative=true; } @endphp
                            @if ($item === 'STOCK AMAN')
                            <td class="bg-success" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                $item
                                }}
                            </td>
                            @elseif ($item == 'AMAN')
                            <td class="bg-success" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                $item
                                }}
                            </td>
                            @elseif ($item == 'ALERT')
                            <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                $item
                                }}
                            </td>
                            @elseif ($item == 'OVERLOAD')
                            <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                $item
                                }}
                            </td>
                            @elseif ($key == 'CAPACITY')
                            <td class="column1" style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                }}
                            </td>
                            @elseif ($i === 0)
                            <td class="cell-2" style="vertical-align: middle; text-align: center; padding: 0;">{{ $item
                                }}
                            </td>
                            @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                            <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                $item }}</td>
                            @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                            <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                $item }}</td>
                            @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                                style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                }}</td>
                            @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                                    style="vertical-align : middle;text-align:center; padding:0;">{{
                                    $item }}</td>
                            @else
                            <td style="vertical-align: middle; text-align: center; padding: 0;">{{ $item }}</td>
                            @endif
                            @endforeach
                            </tr>
                            @endfor
                            <tr class="column1">
                                @foreach ($slicedDataTotal2[0] as $key => $item)
                                @php
                                $decimalValue = false;
                                if (is_numeric($item) && floor($item) != $item) {
                                $decimalValue = true;
                                }
                                @endphp
                                @php
                                $isNegative = false;
                                if ($item < 0) { $isNegative=true; } @endphp
                                @if ($item == 'TOTAL STOCK WH SO SINGARAJA')
                                <td style="vertical-align: middle; text-align: center; padding: 0;" colspan="3">{{ $item
                                    }}
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                @elseif ($item == '')
                                <td style="display: none"></td>
                                @elseif ($item == 'KEBUTUHAN TAG WH SO')
                                <td style="vertical-align: middle; text-align: center; padding: 0;" colspan="2">{{ $item
                                    }}
                                </td>
                                @elseif ($item == 'KEBUTHAN DONOR WITEL')
                                <td style="vertical-align: middle; text-align: center; padding: 0;" colspan="2">{{ $item
                                    }}
                                </td>
                                @elseif ($isNegative && $key=='STB1' || $key=='ONT1')
                                <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                    $item }}</td>
                                @elseif ($decimalValue && $key=='STB1' || $key=='ONT1')
                                <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                    $item }}</td>
                                @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                                    style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                    }}</td>
                                @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                                 style="vertical-align : middle;text-align:center; padding:0;">{{
                                 $item }}</td>
                                @else
                                <td style="vertical-align: middle; text-align: center; padding: 0;">{{ $item }}</td>
                                @endif
                                @endforeach
                            </tr>
                            @for ($i = 0; $i < count($slicedDataAlert3); $i++) <tr>
                                @foreach ($slicedDataAlert3[$i] as $key => $item)
                                @php
                                $decimalValue = false;
                                if (is_numeric($item) && floor($item) != $item) {
                                $decimalValue = true;
                                }
                                @endphp
                                @php
                                $isNegative = false;
                                if ($item < 0) { $isNegative=true; } @endphp
                                @if ($item == 'STOCK AMAN')
                                <td class="bg-success" style="vertical-align : middle;text-align:center; padding:0;">{{
                                    $item }}
                                </td>
                                @elseif ($item == 'AMAN')
                                <td class="bg-success" style="vertical-align : middle;text-align:center; padding:0;">{{
                                    $item }}
                                </td>
                                @elseif ($item == 'ALERT')
                                <td class="bg-danger" style="vertical-align : middle;text-align:center; padding:0;">{{
                                    $item
                                    }}
                                </td>
                                @elseif ($item == 'OVERLOAD')
                                <td class="bg-danger" style="vertical-align : middle;text-align:center; padding:0;">{{
                                    $item
                                    }}
                                </td>
                                @elseif ($key == 'CAPACITY')
                                <td class="column1" style="vertical-align : middle;text-align:center; padding:0;">{{
                                    $item
                                    }}
                                </td>
                                @elseif ($i === 0)
                                <td class="cell-2" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                    $item
                                    }}
                                </td>
                                @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                    $item }}</td>
                                @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                    $item }}</td>
                                @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                                    style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                    }}</td>
                                    @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                                        style="vertical-align : middle;text-align:center; padding:0;">{{
                                        $item }}</td>

                                @else
                                <td style="vertical-align : middle;text-align:center; padding:0;">{{ $item }}</td>
                                @endif
                                @endforeach
                                </tr>
                                @endfor
                                <tr class="column1">
                                    @foreach ($slicedDataTotal3[0] as $key => $item)
                                    @php
                                    $decimalValue = false;
                                    if (is_numeric($item) && floor($item) != $item) {
                                    $decimalValue = true;
                                    }
                                    @endphp
                                    @php
                                    $isNegative = false;
                                    if ($item < 0) { $isNegative=true; } @endphp
                                    @if ($item == 'TOTAL STOCK WH SO MADIUN')
                                    <td style="vertical-align: middle; text-align: center; padding: 0;" colspan="3">{{
                                        $item
                                        }}
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    @elseif ($item == '')
                                    <td style="display: none"></td>
                                    @elseif ($item == 'KEBUTUHAN TAG WH SO')
                                    <td style="vertical-align: middle; text-align: center; padding: 0;" colspan="2">{{
                                        $item
                                        }}
                                    </td>
                                    @elseif ($item == 'KEBUTHAN DONOR WITEL')
                                    <td style="vertical-align: middle; text-align: center; padding: 0;" colspan="2">{{
                                        $item
                                        }}
                                    </td>
                                    @elseif ($isNegative && ($key=='STB1' || $key=='ONT1' ))
                                    <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                        $item }}</td>
                                    @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1' ))
                                    <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                        $item }}</td>
                                    @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                                        style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                        }}</td>
                                        @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                                            style="vertical-align : middle;text-align:center; padding:0;">{{
                                            $item }}</td>
                                    @else
                                    <td style="vertical-align: middle; text-align: center; padding: 0;">{{ $item }}</td>
                                    @endif
                                    @endforeach
                                </tr>
                                @for ($i = 0; $i < count($slicedDataAlert4); $i++) <tr>
                                    @foreach ($slicedDataAlert4[$i] as $key => $item)
                                    @php
                                    $decimalValue = false;
                                    if (is_numeric($item) && floor($item) != $item) {
                                    $decimalValue = true;
                                    }
                                    @endphp
                                    @php
                                    $isNegative = false;
                                    if ($item < 0) { $isNegative=true; } @endphp
                                    @if ($item == 'STOCK AMAN')
                                    <td class="bg-success"
                                        style="vertical-align : middle;text-align:center; padding:0;">{{
                                        $item }}</td>
                                    @elseif ($item == 'AMAN')
                                    <td class="bg-success"
                                        style="vertical-align : middle;text-align:center; padding:0;">{{
                                        $item }}</td>
                                    @elseif ($item == 'ALERT')
                                    <td class="bg-danger" style="vertical-align : middle;text-align:center; padding:0;">
                                        {{
                                        $item
                                        }}</td>
                                    @elseif ($item == 'OVERLOAD')
                                    <td class="bg-danger" style="vertical-align : middle;text-align:center; padding:0;">
                                        {{
                                        $item
                                        }}</td>
                                    @elseif ($key == 'CAPACITY')
                                    <td class="column1" style="vertical-align : middle;text-align:center; padding:0;">{{
                                        $item
                                        }}</td>
                                        @elseif ($i === 0)
                                        <td class="cell-2" style="vertical-align: middle; text-align: center; padding: 0;">
                                            {{
                                            $item
                                            }}
                                        </td>
                                        @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                        <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                            $item }}</td>
                                        @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                        <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                            $item }}</td>
                                        @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                                            style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                            }}</td>
                                            @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                                                style="vertical-align : middle;text-align:center; padding:0;">{{
                                                $item }}</td>

                                    @else
                                    <td style="vertical-align : middle;text-align:center; padding:0;">{{ $item }}</td>
                                    @endif
                                    @endforeach
                                    </tr>
                                    @endfor
                                    <tr class="column1">
                                        @foreach ($slicedDataTotal4[0] as $key => $item)
                                        @php
                                        $decimalValue = false;
                                        if (is_numeric($item) && floor($item) != $item) {
                                        $decimalValue = true;
                                        }
                                        @endphp
                                        @php
                                        $isNegative = false;
                                        if ($item < 0) { $isNegative=true; } @endphp
                                        @if ($item == 'TOTAL STOCK WH SO MALANG')
                                        <td style="vertical-align: middle; text-align: center; padding: 0;" colspan="3">
                                            {{
                                            $item
                                            }}
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        @elseif ($item == '')
                                        <td style="display: none"></td>
                                        @elseif ($item == 'KEBUTUHAN TAG WH SO')
                                        <td style="vertical-align: middle; text-align: center; padding: 0;" colspan="2">
                                            {{
                                            $item
                                            }}
                                        </td>
                                        @elseif ($item == 'KEBUTHAN DONOR WITEL')
                                        <td style="vertical-align: middle; text-align: center; padding: 0;" colspan="2">
                                            {{
                                            $item
                                            }}
                                        </td>
                                        @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                        <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                            $item }}</td>
                                        @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                        <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                            $item }}</td>
                                        @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                                            style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                            }}</td>
                                            @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                                                style="vertical-align : middle;text-align:center; padding:0;">{{
                                                $item }}</td>
                                        @else
                                        <td style="vertical-align: middle; text-align: center; padding: 0;">{{ $item }}
                                        </td>
                                        @endif
                                        @endforeach
                                    </tr>
                                    @for ($i = 0; $i < count($slicedDataAlert5); $i++) <tr>
                                        @foreach ($slicedDataAlert5[$i] as $key => $item)
                                        @php
                                        $decimalValue = false;
                                        if (is_numeric($item) && floor($item) != $item) {
                                        $decimalValue = true;
                                        }
                                        @endphp
                                        @php
                                        $isNegative = false;
                                        if ($item < 0) { $isNegative=true; } @endphp
                                        @if ($item == 'STOCK AMAN')
                                        <td class="bg-success"
                                            style="vertical-align : middle;text-align:center; padding:0;">{{
                                            $item }}</td>
                                        @elseif ($item == 'AMAN')
                                        <td class="bg-success"
                                            style="vertical-align : middle;text-align:center; padding:0;">{{
                                            $item }}</td>
                                        @elseif ($item == 'ALERT')
                                        <td class="bg-danger"
                                            style="vertical-align : middle;text-align:center; padding:0;">
                                            {{
                                            $item }}</td>
                                        @elseif ($item == 'OVERLOAD')
                                        <td class="bg-danger"
                                            style="vertical-align : middle;text-align:center; padding:0;">
                                            {{
                                            $item }}</td>
                                        @elseif ($key == 'CAPACITY')
                                        <td class="column1"
                                            style="vertical-align : middle;text-align:center; padding:0;">{{
                                            $item }}</td>
                                            @elseif ($i === 0)
                                            <td class="cell-2" style="vertical-align: middle; text-align: center; padding: 0;">
                                                {{
                                                $item }}
                                            </td>
                                            @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                            <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                $item }}</td>
                                            @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                            <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                $item }}</td>
                                            @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                                                style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                }}</td>
                                                @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                                                    style="vertical-align : middle;text-align:center; padding:0;">{{
                                                    $item }}</td>

                                        @else
                                        <td style="vertical-align : middle;text-align:center; padding:0;">{{ $item }}
                                        </td>
                                        @endif
                                        @endforeach
                                        </tr>
                                        @endfor
                                        <tr class="column1">
                                            @foreach ($slicedDataTotal5[0] as $key => $item)
                                            @php
                                            $decimalValue = false;
                                            if (is_numeric($item) && floor($item) != $item) {
                                            $decimalValue = true;
                                            }
                                            @endphp
                                            @php
                                            $isNegative = false;
                                            if ($item < 0) { $isNegative=true; } @endphp
                                            @if ($item == 'TOTAL STOCK WH SO PASURUAN')
                                            <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                colspan="3">
                                                {{
                                                $item
                                                }}
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            @elseif ($item == '')
                                            <td style="display: none"></td>
                                            @elseif ($item == 'KEBUTUHAN TAG WH SO')
                                            <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                colspan="2">
                                                {{
                                                $item
                                                }}
                                            </td>
                                            @elseif ($item == 'KEBUTHAN DONOR WITEL')
                                            <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                colspan="2">
                                                {{
                                                $item
                                                }}
                                            </td>
                                            @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                            <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                $item }}</td>
                                            @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                            <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                $item }}</td>
                                            @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                                                style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                }}</td>
                                                @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                                                    style="vertical-align : middle;text-align:center; padding:0;">{{
                                                    $item }}</td>
                                            @else
                                            <td style="vertical-align: middle; text-align: center; padding: 0;">{{ $item
                                                }}
                                            </td>
                                            @endif
                                            @endforeach
                                        </tr>
                                        @for ($i = 0; $i < count($slicedDataAlert6); $i++) <tr>
                                            @foreach ($slicedDataAlert6[$i] as $key => $item)
                                            @php
                                            $decimalValue = false;
                                            if (is_numeric($item) && floor($item) != $item) {
                                            $decimalValue = true;
                                            }
                                            @endphp
                                            @php
                                            $isNegative = false;
                                            if ($item < 0) { $isNegative=true; } @endphp
                                            @if ($item == 'STOCK AMAN')
                                            <td class="bg-success"
                                                style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                }}
                                            </td>
                                            @elseif ($item == 'AMAN')
                                            <td class="bg-success"
                                                style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                }}
                                            </td>
                                            @elseif ($item == 'ALERT')
                                            <td class="bg-danger"
                                                style="vertical-align : middle;text-align:center; padding:0;">
                                                {{ $item }}</td>
                                            @elseif ($item == 'OVERLOAD')
                                            <td class="bg-danger"
                                                style="vertical-align : middle;text-align:center; padding:0;">
                                                {{ $item }}</td>
                                            @elseif ($key == 'CAPACITY')
                                            <td class="column1"
                                                style="vertical-align : middle;text-align:center; padding:0;">{{
                                                $item }}</td>
                                                @elseif ($i === 0)
                                                <td class="cell-2" style="vertical-align: middle; text-align: center; padding: 0;">
                                                    {{ $item }}
                                                </td>
                                                @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                                <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                    $item }}</td>
                                                @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                                <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                    $item }}</td>
                                                @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                                                    style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                    }}</td>
                                                    @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                                                        style="vertical-align : middle;text-align:center; padding:0;">{{
                                                        $item }}</td>

                                            @else
                                            <td style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                }}
                                            </td>
                                            @endif
                                            @endforeach
                                            </tr>
                                            @endfor
                                            <tr class="column1">
                                                @foreach ($slicedDataTotal6[0] as $key => $item)
                                                @php
                                                $decimalValue = false;
                                                if (is_numeric($item) && floor($item) != $item) {
                                                $decimalValue = true;
                                                }
                                                @endphp
                                                @php
                                                $isNegative = false;
                                                if ($item < 0) { $isNegative=true; } @endphp
                                                @if ($item == 'TOTAL STOCK WH SO SBS')
                                                <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                    colspan="3">
                                                    {{
                                                    $item
                                                    }}
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                @elseif ($item == '')
                                                <td style="display: none"></td>
                                                @elseif ($item == 'KEBUTUHAN TAG WH SO')
                                                <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                    colspan="2">
                                                    {{
                                                    $item
                                                    }}
                                                </td>
                                                @elseif ($item == 'KEBUTHAN DONOR WITEL')
                                                <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                    colspan="2">
                                                    {{
                                                    $item
                                                    }}
                                                </td>
                                                @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                                <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                    $item }}</td>
                                                @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                                <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                    $item }}</td>
                                                @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                                                    style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                    }}</td>
                                                    @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                                                        style="vertical-align : middle;text-align:center; padding:0;">{{
                                                        $item }}</td>
                                                @else
                                                <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                    $item
                                                    }}
                                                </td>
                                                @endif
                                                @endforeach
                                            </tr>
                                            @for ($i = 0; $i < count($slicedDataAlert7); $i++) <tr>
                                                @foreach ($slicedDataAlert7[$i] as $key => $item)
                                                @php
                                                $decimalValue = false;
                                                if (is_numeric($item) && floor($item) != $item) {
                                                $decimalValue = true;
                                                }
                                                @endphp
                                                @php
                                                $isNegative = false;
                                                if ($item < 0) { $isNegative=true; } @endphp
                                                @if ($item == 'STOCK AMAN')
                                                <td class="bg-success"
                                                    style="vertical-align : middle;text-align:center; padding:0;">{{
                                                    $item
                                                    }}
                                                </td>
                                                @elseif ($item == 'AMAN')
                                                <td class="bg-success"
                                                    style="vertical-align : middle;text-align:center; padding:0;">{{
                                                    $item
                                                    }}
                                                </td>
                                                @elseif ($item == 'ALERT')
                                                <td class="bg-danger"
                                                    style="vertical-align : middle;text-align:center; padding:0;">{{
                                                    $item
                                                    }}
                                                </td>
                                                @elseif ($item == 'OVERLOAD')
                                                <td class="bg-danger"
                                                    style="vertical-align : middle;text-align:center; padding:0;">{{
                                                    $item
                                                    }}
                                                </td>
                                                @elseif ($key == 'CAPACITY')
                                                <td class="column1"
                                                    style="vertical-align : middle;text-align:center; padding:0;">{{
                                                    $item
                                                    }}
                                                </td>
                                                @elseif ($i === 0)
                                                <td class="cell-2" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                    $item
                                                    }}
                                                </td>
                                                @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                                <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                    $item }}</td>
                                                @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                                <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                    $item }}</td>
                                                @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                                                    style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                    }}</td>
                                                    @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                                                        style="vertical-align : middle;text-align:center; padding:0;">{{
                                                        $item }}</td>

                                                @else
                                                <td style="vertical-align : middle;text-align:center; padding:0;">{{
                                                    $item
                                                    }}
                                                </td>
                                                @endif
                                                @endforeach
                                                </tr>
                                                @endfor
                                                <tr class="column1">
                                                    @foreach ($slicedDataTotal7[0] as $key => $item)
                                                    @php
                                                    $decimalValue = false;
                                                    if (is_numeric($item) && floor($item) != $item) {
                                                    $decimalValue = true;
                                                    }
                                                    @endphp
                                                    @php
                                                    $isNegative = false;
                                                    if ($item < 0) { $isNegative=true; } @endphp
                                                    @if ($item == 'TOTAL STOCK WH SO KEDIRI')
                                                    <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                        colspan="3">
                                                        {{
                                                        $item
                                                        }}
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    @elseif ($item == '')
                                                    <td style="display: none"></td>
                                                    @elseif ($item == 'KEBUTUHAN TAG WH SO')
                                                    <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                        colspan="2">
                                                        {{
                                                        $item
                                                        }}
                                                    </td>
                                                    @elseif ($item == 'KEBUTHAN DONOR WITEL')
                                                    <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                        colspan="2">
                                                        {{
                                                        $item
                                                        }}
                                                    </td>
                                                    @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                                    <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                        $item }}</td>
                                                    @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                                    <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                        $item }}</td>
                                                    @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                                                        style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                        }}</td>
                                                        @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                                                            style="vertical-align : middle;text-align:center; padding:0;">{{
                                                            $item }}</td>
                                                    @else
                                                    <td style="vertical-align: middle; text-align: center; padding: 0;">
                                                        {{
                                                        $item
                                                        }}
                                                    </td>
                                                    @endif
                                                    @endforeach
                                                </tr>
                                                @for ($i = 0; $i < count($slicedDataAlert8); $i++) <tr>
                                                    @foreach ($slicedDataAlert8[$i] as $key => $item)
                                                    @php
                                                    $decimalValue = false;
                                                    if (is_numeric($item) && floor($item) != $item) {
                                                    $decimalValue = true;
                                                    }
                                                    @endphp
                                                    @php
                                                    $isNegative = false;
                                                    if ($item < 0) { $isNegative=true; } @endphp
                                                    @if ($item == 'STOCK AMAN')
                                                    <td class="bg-success"
                                                        style="vertical-align : middle;text-align:center; padding:0;">{{
                                                        $item
                                                        }}</td>
                                                    @elseif ($item == 'AMAN')
                                                    <td class="bg-success"
                                                        style="vertical-align : middle;text-align:center; padding:0;">{{
                                                        $item
                                                        }}</td>
                                                    @elseif ($item == 'ALERT')
                                                    <td class="bg-danger"
                                                        style="vertical-align : middle;text-align:center; padding:0;">{{
                                                        $item
                                                        }}</td>
                                                    @elseif ($item == 'OVERLOAD')
                                                    <td class="bg-danger"
                                                        style="vertical-align : middle;text-align:center; padding:0;">{{
                                                        $item
                                                        }}</td>
                                                    @elseif ($key == 'CAPACITY')
                                                    <td class="column1"
                                                        style="vertical-align : middle;text-align:center; padding:0;">{{
                                                        $item
                                                        }}</td>
                                                        @elseif ($i === 0)
                                                        <td class="cell-2" style="vertical-align: middle; text-align: center; padding: 0;">
                                                            {{
                                                            $item
                                                            }}
                                                        </td>
                                                        @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                                        <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                            $item }}</td>
                                                        @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                                        <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                            $item }}</td>
                                                        @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                                                            style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                            }}</td>
                                                            @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                                                                style="vertical-align : middle;text-align:center; padding:0;">{{
                                                                $item }}</td>

                                                    @else
                                                    <td style="vertical-align : middle;text-align:center; padding:0;">{{
                                                        $item
                                                        }}</td>
                                                    @endif
                                                    @endforeach
                                                    </tr>
                                                    @endfor
                                                    <tr class="column1">
                                                        @foreach ($slicedDataTotal8[0] as $key => $item)
                                                        @php
                                                        $decimalValue = false;
                                                        if (is_numeric($item) && floor($item) != $item) {
                                                        $decimalValue = true;
                                                        }
                                                        @endphp
                                                        @php
                                                        $isNegative = false;
                                                        if ($item < 0) { $isNegative=true; } @endphp
                                                        @if ($item == 'TOTAL STOCK WH SO SIDOARJO')
                                                        <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                            colspan="3">
                                                            {{
                                                            $item
                                                            }}
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        @elseif ($item == '')
                                                        <td style="display: none"></td>
                                                        @elseif ($item == 'KEBUTUHAN TAG WH SO')
                                                        <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                            colspan="2">
                                                            {{
                                                            $item
                                                            }}
                                                        </td>
                                                        @elseif ($item == 'KEBUTHAN DONOR WITEL')
                                                        <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                            colspan="2">
                                                            {{
                                                            $item
                                                            }}
                                                        </td>
                                                        @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                                        <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                            $item }}</td>
                                                        @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                                        <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                            $item }}</td>
                                                        @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                                                            style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                            }}</td>
                                                            @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                                                                style="vertical-align : middle;text-align:center; padding:0;">{{
                                                                $item }}</td>
                                                        @else
                                                        <td
                                                            style="vertical-align: middle; text-align: center; padding: 0;">
                                                            {{
                                                            $item
                                                            }}
                                                        </td>
                                                        @endif
                                                        @endforeach
                                                    </tr>
                                                    @for ($i = 0; $i < count($slicedDataAlert9); $i++) <tr>
                                                        @foreach ($slicedDataAlert9[$i] as $key => $item)
                                                        @php
                                                        $decimalValue = false;
                                                        if (is_numeric($item) && floor($item) != $item) {
                                                        $decimalValue = true;
                                                        }
                                                        @endphp
                                                        @php
                                                        $isNegative = false;
                                                        if ($item < 0) { $isNegative=true; } @endphp
                                                        @if ($item == 'STOCK AMAN')
                                                        <td class="bg-success"
                                                            style="vertical-align : middle;text-align:center; padding:0;">
                                                            {{
                                                            $item }}</td>
                                                        @elseif ($item == 'AMAN')
                                                        <td class="bg-success"
                                                            style="vertical-align : middle;text-align:center; padding:0;">
                                                            {{
                                                            $item }}</td>
                                                        @elseif ($item == 'ALERT')
                                                        <td class="bg-danger"
                                                            style="vertical-align : middle;text-align:center; padding:0;">
                                                            {{
                                                            $item }}</td>
                                                        @elseif ($item == 'OVERLOAD')
                                                        <td class="bg-danger"
                                                            style="vertical-align : middle;text-align:center; padding:0;">
                                                            {{
                                                            $item }}</td>
                                                        @elseif ($key == 'CAPACITY')
                                                        <td class="column1"
                                                            style="vertical-align : middle;text-align:center; padding:0;">
                                                            {{
                                                            $item }}</td>
                                                            @elseif ($i === 0)
                                                            <td class="cell-2" style="vertical-align: middle; text-align: center; padding: 0;">
                                                                {{
                                                                $item }}
                                                            </td>
                                                            @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                                            <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                $item }}</td>
                                                            @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                                            <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                $item }}</td>
                                                            @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                                                                style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                                }}</td>
                                                                @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                                                                    style="vertical-align : middle;text-align:center; padding:0;">{{
                                                                    $item }}</td>

                                                        @else
                                                        <td
                                                            style="vertical-align : middle;text-align:center; padding:0;">
                                                            {{
                                                            $item }}</td>
                                                        @endif
                                                        @endforeach
                                                        </tr>
                                                        @endfor
                                                        <tr class="column1">
                                                            @foreach ($slicedDataTotal9[0] as $key => $item)
                                                            @php
                                                            $decimalValue = false;
                                                            if (is_numeric($item) && floor($item) != $item) {
                                                            $decimalValue = true;
                                                            }
                                                            @endphp
                                                            @php
                                                            $isNegative = false;
                                                            if ($item < 0) { $isNegative=true; } @endphp
                                                            @if ($item == 'TOTAL STOCK WH SO JEMBER')
                                                            <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                colspan="3">
                                                                {{
                                                                $item
                                                                }}
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            @elseif ($item == '')
                                                            <td style="display: none"></td>
                                                            @elseif ($item == 'KEBUTUHAN TAG WH SO')
                                                            <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                colspan="2">
                                                                {{
                                                                $item
                                                                }}
                                                            </td>
                                                            @elseif ($item == 'KEBUTHAN DONOR WITEL')
                                                            <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                colspan="2">
                                                                {{
                                                                $item
                                                                }}
                                                            </td>
                                                            @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                                            <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                $item }}</td>
                                                            @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                                            <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                $item }}</td>
                                                            @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                                                                style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                                }}</td>
                                                                @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                                                                    style="vertical-align : middle;text-align:center; padding:0;">{{
                                                                    $item }}</td>
                                                            @else
                                                            <td
                                                                style="vertical-align: middle; text-align: center; padding: 0;">
                                                                {{
                                                                $item
                                                                }}
                                                            </td>
                                                            @endif
                                                            @endforeach
                                                        </tr>
                                                        @for ($i = 0; $i < count($slicedDataAlert10); $i++) <tr>
                                                            @foreach ($slicedDataAlert10[$i] as $key => $item)
                                                            @php
                                                            $decimalValue = false;
                                                            if (is_numeric($item) && floor($item) != $item) {
                                                            $decimalValue = true;
                                                            }
                                                            @endphp
                                                            @php
                                                            $isNegative = false;
                                                            if ($item < 0) { $isNegative=true; } @endphp
                                                            @if ($item == 'STOCK AMAN')
                                                            <td class="bg-success"
                                                                style="vertical-align : middle;text-align:center; padding:0;">
                                                                {{
                                                                $item }}</td>
                                                            @elseif ($item == 'AMAN')
                                                            <td class="bg-success"
                                                                style="vertical-align : middle;text-align:center; padding:0;">
                                                                {{
                                                                $item }}</td>
                                                            @elseif ($item == 'ALERT')
                                                            <td class="bg-danger"
                                                                style="vertical-align : middle;text-align:center; padding:0;">
                                                                {{
                                                                $item }}</td>
                                                            @elseif ($item == 'OVERLOAD')
                                                            <td class="bg-danger"
                                                                style="vertical-align : middle;text-align:center; padding:0;">
                                                                {{
                                                                $item }}</td>
                                                            @elseif ($key == 'CAPACITY')
                                                            <td class="column1"
                                                                style="vertical-align : middle;text-align:center; padding:0;">
                                                                {{
                                                                $item }}</td>
                                                                @elseif ($i === 0)
                                                                <td class="cell-2" style="vertical-align: middle; text-align: center; padding: 0;">
                                                                    {{ $item }}
                                                                </td>
                                                                @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                                                <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                    $item }}</td>
                                                                @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                                                <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                    $item }}</td>
                                                                @elseif ($item < 20 && $key=='ONT1') <td class="bg-danger"
                                                                    style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                                    }}</td>
                                                                    @elseif ($item < 15 && $key=='STB1') <td class="bg-danger"
                                                                        style="vertical-align : middle;text-align:center; padding:0;">{{
                                                                        $item }}</td>

                                                            @else
                                                            <td
                                                                style="vertical-align : middle;text-align:center; padding:0;">
                                                                {{
                                                                $item }}</td>
                                                            @endif
                                                            @endforeach
                                                            </tr>
                                                            @endfor
                                                            <tr class="column1">
                                                                @foreach ($slicedDataTotal10[0] as $key => $item)
                                                                @php
                                                                $decimalValue = false;
                                                                if (is_numeric($item) && floor($item) != $item) {
                                                                $decimalValue = true;
                                                                }
                                                                @endphp
                                                                @php
                                                                $isNegative = false;
                                                                if ($item < 0) { $isNegative=true; } @endphp
                                                                @if ($item == 'TOTAL STOCK WH SO MADURA')
                                                                <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                    colspan="3">
                                                                    {{
                                                                    $item
                                                                    }}
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                @elseif ($item == '')
                                                                <td style="display: none"></td>
                                                                @elseif ($item == 'KEBUTUHAN TAG WH SO')
                                                                <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                    colspan="2">
                                                                    {{
                                                                    $item
                                                                    }}
                                                                </td>
                                                                @elseif ($item == 'KEBUTHAN DONOR WITEL')
                                                                <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                    colspan="2">
                                                                    {{
                                                                    $item
                                                                    }}
                                                                </td>
                                                               @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                                                <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                    $item }}</td>
                                                                @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                                                <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                    $item }}</td>
                                                                @elseif ($item < 20 && $key=='ONT1' ) <td class="bg-danger"
                                                                    style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                                    }}</td>
                                                                    @elseif ($item < 15 && $key=='STB1' ) <td class="bg-danger"
                                                                        style="vertical-align : middle;text-align:center; padding:0;">{{
                                                                        $item }}</td>
                                                                @else
                                                                <td
                                                                    style="vertical-align: middle; text-align: center; padding: 0;">
                                                                    {{
                                                                    $item
                                                                    }}
                                                                </td>
                                                                @endif
                                                                @endforeach
                                                            </tr>
                                                            @for ($i = 0; $i < count($slicedDataAlert11); $i++) <tr>
                                                                @foreach ($slicedDataAlert11[$i] as $key => $item)
                                                                @php
                                                                $decimalValue = false;
                                                                if (is_numeric($item) && floor($item) != $item) {
                                                                $decimalValue = true;
                                                                }
                                                                @endphp
                                                                @php
                                                                $isNegative = false;
                                                                if ($item < 0) { $isNegative=true; } @endphp
                                                                @if ($item == 'STOCK AMAN')
                                                                <td class="bg-success"
                                                                    style="vertical-align : middle;text-align:center; padding:0;">
                                                                    {{ $item }}</td>
                                                                @elseif ($item == 'AMAN')
                                                                <td class="bg-success"
                                                                    style="vertical-align : middle;text-align:center; padding:0;">
                                                                    {{ $item }}</td>
                                                                @elseif ($item == 'ALERT')
                                                                <td class="bg-danger"
                                                                    style="vertical-align : middle;text-align:center; padding:0;">
                                                                    {{ $item }}</td>
                                                                @elseif ($item == 'OVERLOAD')
                                                                <td class="bg-danger"
                                                                    style="vertical-align : middle;text-align:center; padding:0;">
                                                                    {{ $item }}</td>
                                                                @elseif ($key == 'CAPACITY')
                                                                <td class="column1"
                                                                    style="vertical-align : middle;text-align:center; padding:0;">
                                                                    {{ $item }}</td>
                                                                    @elseif ($i === 0)
                                                                    <td class="cell-2" style="vertical-align: middle; text-align: center; padding: 0;">
                                                                        {{ $item }}
                                                                    </td>
                                                                   @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                                                <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                    $item }}</td>
                                                                @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                                                <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                    $item }}</td>
                                                                @elseif ($item < 20 && $key=='ONT1' ) <td class="bg-danger"
                                                                    style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                                    }}</td>
                                                                    @elseif ($item < 15 && $key=='STB1' ) <td class="bg-danger"
                                                                        style="vertical-align : middle;text-align:center; padding:0;">{{
                                                                        $item }}</td>

                                                                @else
                                                                <td
                                                                    style="vertical-align : middle;text-align:center; padding:0;">
                                                                    {{ $item }}</td>
                                                                @endif
                                                                @endforeach
                                                                </tr>
                                                                @endfor
                                                                <tr class="column1">
                                                                    @foreach ($slicedDataTotal11[0] as $key => $item)
                                                                    @php
                                                                    $decimalValue = false;
                                                                    if (is_numeric($item) && floor($item) != $item) {
                                                                    $decimalValue = true;
                                                                    }
                                                                    @endphp
                                                                    @php
                                                                    $isNegative = false;
                                                                    if ($item < 0) { $isNegative=true; } @endphp
                                                                    @if ($item == 'TOTAL STOCK WH SO MATARAM')
                                                                    <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                        colspan="3">
                                                                        {{
                                                                        $item
                                                                        }}
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    @elseif ($item == '')
                                                                    <td style="display: none"></td>
                                                                    @elseif ($item == 'KEBUTUHAN TAG WH SO')
                                                                    <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                        colspan="2">
                                                                        {{
                                                                        $item
                                                                        }}
                                                                    </td>
                                                                    @elseif ($item == 'KEBUTHAN DONOR WITEL')
                                                                    <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                        colspan="2">
                                                                        {{
                                                                        $item
                                                                        }}
                                                                    </td>
                                                                   @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                                                <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                    $item }}</td>
                                                                @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                                                <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                    $item }}</td>
                                                                @elseif ($item < 20 && $key=='ONT1' ) <td class="bg-danger"
                                                                    style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                                    }}</td>
                                                                    @elseif ($item < 15 && $key=='STB1' ) <td class="bg-danger"
                                                                        style="vertical-align : middle;text-align:center; padding:0;">{{
                                                                        $item }}</td>
                                                                    @else
                                                                    <td
                                                                        style="vertical-align: middle; text-align: center; padding: 0;">
                                                                        {{
                                                                        $item
                                                                        }}
                                                                    </td>
                                                                    @endif
                                                                    @endforeach
                                                                </tr>
                                                                @for ($i = 0; $i < count($slicedDataAlert12); $i++) <tr>
                                                                    @foreach ($slicedDataAlert12[$i] as $key => $item)
                                                                    @php
                                                                    $decimalValue = false;
                                                                    if (is_numeric($item) && floor($item) != $item) {
                                                                    $decimalValue = true;
                                                                    }
                                                                    @endphp
                                                                    @php
                                                                    $isNegative = false;
                                                                    if ($item < 0) { $isNegative=true; } @endphp
                                                                    @if ($item == 'STOCK AMAN')
                                                                    <td class="bg-success"
                                                                        style="vertical-align : middle;text-align:center; padding:0;">
                                                                        {{ $item }}</td>
                                                                    @elseif ($item == 'AMAN')
                                                                    <td class="bg-success"
                                                                        style="vertical-align : middle;text-align:center; padding:0;">
                                                                        {{ $item }}</td>
                                                                    @elseif ($item == 'ALERT')
                                                                    <td class="bg-danger"
                                                                        style="vertical-align : middle;text-align:center; padding:0;">
                                                                        {{ $item }}</td>
                                                                    @elseif ($item == 'OVERLOAD')
                                                                    <td class="bg-danger"
                                                                        style="vertical-align : middle;text-align:center; padding:0;">
                                                                        {{ $item }}</td>
                                                                    @elseif ($key == 'CAPACITY')
                                                                    <td class="column1"
                                                                        style="vertical-align : middle;text-align:center; padding:0;">
                                                                        {{ $item }}</td>
                                                                        @elseif ($i === 0)
                                                                        <td class="cell-2" style="vertical-align: middle; text-align: center; padding: 0;">
                                                                            {{ $item }}
                                                                        </td>
                                                                     @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                                                    <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                        $item }}</td>
                                                                    @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                                                    <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                        $item }}</td>
                                                                    @elseif ($item < 20 && $key=='ONT1' ) <td class="bg-danger"
                                                                        style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                                        }}</td>
                                                                        @elseif ($item < 15 && $key=='STB1' ) <td class="bg-danger"
                                                                            style="vertical-align : middle;text-align:center; padding:0;">{{
                                                                            $item }}</td>

                                                                    @else
                                                                    <td
                                                                        style="vertical-align : middle;text-align:center; padding:0;">
                                                                        {{ $item }}</td>
                                                                    @endif
                                                                    @endforeach
                                                                    </tr>
                                                                    @endfor
                                                                    <tr class="column1">
                                                                        @foreach ($slicedDataTotal12[0] as $key =>
                                                                        $item)
                                                                        @php
                                                                        $decimalValue = false;
                                                                        if (is_numeric($item) && floor($item) != $item) {
                                                                        $decimalValue = true;
                                                                        }
                                                                        @endphp
                                                                        @php
                                                                        $isNegative = false;
                                                                        if ($item < 0) { $isNegative=true; } @endphp
                                                                        @if ($item == 'TOTAL STOCK WH SO KUPANG')
                                                                        <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                            colspan="3">
                                                                            {{
                                                                            $item
                                                                            }}
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        @elseif ($item == '')
                                                                        <td style="display: none"></td>
                                                                        @elseif ($item == 'KEBUTUHAN TAG WH SO')
                                                                        <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                            colspan="2">
                                                                            {{
                                                                            $item
                                                                            }}
                                                                        </td>
                                                                        @elseif ($item == 'KEBUTHAN DONOR WITEL')
                                                                        <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                            colspan="2">
                                                                            {{
                                                                            $item
                                                                            }}
                                                                        </td>
                                                                       @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                                                    <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                        $item }}</td>
                                                                    @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                                                    <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                        $item }}</td>
                                                                    @elseif ($item < 20 && $key=='ONT1' ) <td class="bg-danger"
                                                                        style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                                        }}</td>
                                                                        @elseif ($item < 15 && $key=='STB1' ) <td class="bg-danger"
                                                                            style="vertical-align : middle;text-align:center; padding:0;">{{
                                                                            $item }}</td>
                                                                        @else
                                                                        <td
                                                                            style="vertical-align: middle; text-align: center; padding: 0;">
                                                                            {{
                                                                            $item
                                                                            }}
                                                                        </td>
                                                                        @endif
                                                                        @endforeach
                                                                    </tr>
                                                                    @for ($i = 0; $i < count($slicedDataAlert13); $i++)
                                                                        <tr>
                                                                        @foreach ($slicedDataAlert13[$i] as $key =>
                                                                        $item)
                                                                        @php
                                                                        $decimalValue = false;
                                                                        if (is_numeric($item) && floor($item) != $item) {
                                                                        $decimalValue = true;
                                                                        }
                                                                        @endphp
                                                                        @php
                                                                        $isNegative = false;
                                                                        if ($item < 0) { $isNegative=true; } @endphp
                                                                        @if ($item == 'STOCK AMAN')
                                                                        <td class="bg-success"
                                                                            style="vertical-align : middle;text-align:center; padding:0;">
                                                                            {{ $item }}</td>
                                                                        @elseif ($item == 'AMAN')
                                                                        <td class="bg-success"
                                                                            style="vertical-align : middle;text-align:center; padding:0;">
                                                                            {{ $item }}</td>
                                                                        @elseif ($item == 'ALERT')
                                                                        <td class="bg-danger"
                                                                            style="vertical-align : middle;text-align:center; padding:0;">
                                                                            {{ $item }}</td>
                                                                        @elseif ($item == 'OVERLOAD')
                                                                        <td class="bg-danger"
                                                                            style="vertical-align : middle;text-align:center; padding:0;">
                                                                            {{ $item }}</td>
                                                                        @elseif ($key == 'CAPACITY')
                                                                        <td class="column1"
                                                                            style="vertical-align : middle;text-align:center; padding:0;">
                                                                            {{ $item }}</td>
                                                                            @elseif ($i === 0)
                                                                            <td class="cell-2" style="vertical-align: middle; text-align: center; padding: 0;">
                                                                                {{ $item }}
                                                                            </td>
                                                                           @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                                                        <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                            $item }}</td>
                                                                        @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                                                        <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                            $item }}</td>
                                                                        @elseif ($item < 20 && $key=='ONT1' ) <td class="bg-danger"
                                                                            style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                                            }}</td>
                                                                            @elseif ($item < 15 && $key=='STB1' ) <td class="bg-danger"
                                                                                style="vertical-align : middle;text-align:center; padding:0;">{{
                                                                                $item }}</td>

                                                                        @else
                                                                        <td
                                                                            style="vertical-align : middle;text-align:center; padding:0;">
                                                                            {{ $item }}</td>
                                                                        @endif
                                                                        @endforeach
                                                                        </tr>
                                                                        @endfor
                                                                        <tr class="column1">
                                                                            @foreach ($slicedDataTotal13[0] as $key =>
                                                                            $item)
                                                                            @php
                                                                            $decimalValue = false;
                                                                            if (is_numeric($item) && floor($item) != $item) {
                                                                            $decimalValue = true;
                                                                            }
                                                                            @endphp
                                                                            @php
                                                                            $isNegative = false;
                                                                            if ($item < 0) { $isNegative=true; } @endphp

                                                                            @if ($item == 'TOTAL STOCK WH SO SBU')
                                                                            <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                                colspan="3">
                                                                                {{
                                                                                $item
                                                                                }}
                                                                            </td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            @elseif ($item == '')
                                                                            <td style="display: none"></td>
                                                                            @elseif ($item == 'KEBUTUHAN TAG WH SO')
                                                                            <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                                colspan="2">
                                                                                {{
                                                                                $item
                                                                                }}
                                                                            </td>
                                                                            @elseif ($item == 'KEBUTHAN DONOR WITEL')
                                                                            <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                                colspan="2">
                                                                                {{
                                                                                $item
                                                                                }}
                                                                            </td>
                                                                           @elseif ($isNegative && ($key=='STB1' || $key=='ONT1'))
                                                                        <td class="bg-danger" style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                            $item }}</td>
                                                                        @elseif ($decimalValue && ($key=='STB1' || $key=='ONT1'))
                                                                        <td style="vertical-align: middle; text-align: center; padding: 0;">{{
                                                                            $item }}</td>
                                                                        @elseif ($item < 20 && $key=='ONT1' ) <td class="bg-danger"
                                                                            style="vertical-align : middle;text-align:center; padding:0;">{{ $item
                                                                            }}</td>
                                                                            @elseif ($item < 15 && $key=='STB1' ) <td class="bg-danger"
                                                                                style="vertical-align : middle;text-align:center; padding:0;">{{
                                                                                $item }}</td>
                                                                            @else
                                                                            <td
                                                                                style="vertical-align: middle; text-align: center; padding: 0;">
                                                                                {{
                                                                                $item
                                                                                }}
                                                                            </td>
                                                                            @endif
                                                                            @endforeach
                                                                        </tr>
                                                                        @for ($i = 0; $i < count($slicedDataAlert14);
                                                                            $i++) <tr>
                                                                            @foreach ($slicedDataAlert14[$i] as $key =>
                                                                            $item)
                                                                            <td class="cell-2"
                                                                                style="vertical-align : middle;text-align:center; padding:0;">
                                                                                {{ $item }}</td>
                                                                            @endforeach
                                                                            </tr>
                                                                            @endfor
                                                                            <tr class="column2">
                                                                                @foreach ($slicedDataTotal14[0] as $key
                                                                                =>
                                                                                $item)
                                                                                @if ($item == 'TOTAL')
                                                                                <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                                    colspan="3">
                                                                                    {{
                                                                                    $item
                                                                                    }}
                                                                                </td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                @elseif ($item == '')
                                                                                <td style="display: none"></td>
                                                                                @elseif ($item == 'KEBUTUHAN TAG WH SO')
                                                                                <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                                    colspan="2">
                                                                                    {{
                                                                                    $item
                                                                                    }}
                                                                                </td>
                                                                                @elseif ($item == 'KEBUTHAN DONOR
                                                                                WITEL')
                                                                                <td style="vertical-align: middle; text-align: center; padding: 0;"
                                                                                    colspan="2">
                                                                                    {{
                                                                                    $item
                                                                                    }}
                                                                                </td>
                                                                                @else
                                                                                <td
                                                                                    style="vertical-align: middle; text-align: center; padding: 0;">
                                                                                    {{
                                                                                    $item
                                                                                    }}
                                                                                </td>
                                                                                @endif
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
