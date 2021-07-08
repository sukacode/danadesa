<?php

function bulanIndonesia($angkaBulan)
{
    switch ($angkaBulan) {
        case '1':
            $bulan = "Januari";
            break;
        case '1':
            $bulan = "Januari";
            break;
        case '2':
            $bulan = "Februari";
            break;
        case '3':
            $bulan = "Maret";
            break;
        case '4':
            $bulan = "Appril";
            break;
        case '5':
            $bulan = "Mai";
            break;
        case '6':
            $bulan = "Juni";
            break;
        case '7':
            $bulan = "Juli";
            break;
        case '8':
            $bulan = "Agustus";
            break;
        case '9':
            $bulan = "September";
            break;
        case '10':
            $bulan = "Oktover";
            break;
        case '11':
            $bulan = "November";
            break;
        case '12':
            $bulan = "Desember";
            break;
        default:
            $bulan = "Tidak ada bulan yang dipilih..";
            break;
    }
    return    $bulan;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>
    <style type="text/css">
        body {
            font-family: Times New Roman;
        }

        table {
            border-collapse: collapse;
        }

        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body>
    <center>
        <h3>DANA DESA SURANTIAH</h3>
    </center>
    <center>Kecamatan Nagari rawang gunuang <br> kelurahan malelo surantiah </center>
    <h3>Laporan Pengeluaran Dana</h3>
    <hr>
    <br>

    <table>
        <tr>
            <td>Bulan</td>
            <td>:</td>
            <td><?= bulanIndonesia(date('m')); ?></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td>:</td>
            <td><?= date('Y'); ?></td>
        </tr>
    </table>
    <table border="1" cellpadding="4" cellspacing="0" width="100%">
        <tr>
            <th>No</th>
            <th>Tanggal Keluar</th>
            <th>Nama Bidang</th>
            <th>Jumlah</th>

        </tr>
        <?php $no = 1.; ?>
        <?php foreach ($pengeluaran_dana as $pdn) : ?>
            <tr>
                <td width='40px' align='center'><?= $no; ?></td>
                <td><?= date('d-m-Y', strtotime($pdn['tgl_keluar'])); ?></td>
                <td><?= $pdn['bidang']; ?></td>
                <td>Rp.<?= number_format($pdn['jumlah']); ?>,00-</td>
            </tr>
            <?php $no++; ?>
        <?php endforeach; ?>


    </table>
    <table width="100%">
        <tr>
            <td></td>
            <td width="300px">
                <p>
                    Surantiah,<?= (date("Y/m/d")); ?><br>
                    Administrator,
                </p>
                <br>
                <br>
                <br>
                <p>----------------------------------------------</p>
            </td>
        </tr>

    </table>
    <a href="#" class="no-print" onclick="window.print();">Cetak/Print</a>
</body>

</html>