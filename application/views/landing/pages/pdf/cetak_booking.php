<html>

<head>
    <style>
        .text-center {
            text-align: center;
        }

        .float-right {
            float: right;
            width: 40%;
        }

        .float-left {
            float: left;
            width: 30%;
        }

        .float-rightb {
            float: right;
            width: 50%;
        }

        .float-leftb {
            float: left;
            width: 40%;
        }

        .th-header {
            border-top: 0.1mm solid #000;
            border-bottom: 0.1mm solid #000;
            padding-top: 2px;
            padding-bottom: 2px;
            padding-left: 1px;
            padding-right: 1px;
        }

        .th-pemeriksaan_header {
            border-bottom: 0.1mm solid #000;
            text-align: left;
            font-weight: normal;
        }

        .td-header {
            text-align: left;
        }

        .td-pemeriksaan_footer {
            border-bottom: 0.1mm solid #000;
        }

        .td-ttd {
            text-align: center;
        }

        .table-header td {
            font-size: 75% !important;
        }

        .table-ttd {
            font-size: 0.70em;
        }

        .table-mepet {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .table-mepet td {
            margin: 0;
        }

        .td-ttd {
            text-align: right;
        }

        .content {
            margin-left: 10px;
            width: 100%;
        }

        span {
            font-size: 12px;
        }
    </style>
</head>

<body style="font-family: Times New Roman;">
    <htmlpageheader name="header">
        <table class="table-mepet" style="width: 100%;">
            <tr>
                <th class="th-header" colspan="9">
                    <table class="table-header table-mepet" style="width: 100%;">
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">LAPORAN BOOKING LAPANGAN</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </th>
            </tr>
            <tr>
                <td class="th-pemeriksaan_header" colspan="9"></td>
            </tr>
        </table>
    </htmlpageheader>

    <sethtmlpageheader name="header" page="O" value="on" show-this-page="1" />

    <div style="padding-left: 20px; padding-right: 20px; padding-top: 10px; font-size: 11px;">
        <h3>Detail Booking Lapangan</h3>
        <table border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse;">
            <tr>
                <th style="font-size: 12px;">Nama Lengkap</th>
                <th style="font-size: 12px;">Lapangan</th>
                <th style="font-size: 12px;">Nomor Tlp</th>
                <th style="font-size: 12px;">Tanggal Booking</th>
                <th style="font-size: 12px;">Jam Booking</th>
                <th style="font-size: 12px;">Durasi Booking</th>
            </tr>

            <tr>
                <td style="text-transform: capitalize; font-size: 12px;"><?= $nama ?></td>
                <td style="font-size: 12px;"><?= $no_lapang ?></td>
                <td style="font-size: 12px;"><?= $no_tlp ?></td>
                <td style="font-size: 12px;"><?= $tgl_booking ?></td>
                <td style="font-size: 12px;"><?= $jam_booking ?></td>
                <td style="font-size: 12px;"><?= $durasi ?> Jam</td>
            </tr>
        </table>
    </div>
</body>

</html>
