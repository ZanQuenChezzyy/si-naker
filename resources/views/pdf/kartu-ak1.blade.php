<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Cetak Kartu AK-1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #000;
        }

        .header {
            text-align: center;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .header h3 {
            margin: 0;
            font-size: 16px;
        }

        .header p {
            margin: 5px 0 0 0;
            font-size: 14px;
            font-weight: bold;
        }

        .title {
            text-align: center;
            font-weight: bold;
            font-size: 14px;
            text-decoration: underline;
            margin-bottom: 5px;
        }

        .subtitle {
            text-align: center;
            margin-bottom: 20px;
        }

        table.biodata {
            width: 100%;
            border-collapse: collapse;
        }

        table.biodata td {
            padding: 5px;
            vertical-align: top;
        }

        .label-cell {
            width: 30%;
            font-weight: bold;
        }

        .ttd-container {
            margin-top: 50px;
            width: 100%;
        }

        .ttd-box {
            float: right;
            width: 40%;
            text-align: center;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>

    <div class="header">
        <h3>KEMENTERIAN KETENAGAKERJAAN REPUBLIK INDONESIA</h3>
        <p>KARTU TANDA BUKTI PENDAFTARAN PENCARI KERJA (AK/I)</p>
    </div>

    <div class="title">
        NOMOR PENDAFTARAN
    </div>
    <div class="subtitle">
        {{ $kartu->nomor_ak1 }}
    </div>

    <table class="biodata">
        <tr>
            <td class="label-cell">Nomor Induk Kependudukan (NIK)</td>
            <td>: {{ $kartu->pencariKerja->nik }}</td>
        </tr>
        <tr>
            <td class="label-cell">Nama Lengkap</td>
            <td>: {{ $kartu->pencariKerja->nama }}</td>
        </tr>
        <tr>
            <td class="label-cell">Tempat, Tanggal Lahir</td>
            <td>: {{ $kartu->pencariKerja->tempat_lahir }},
                {{ $kartu->pencariKerja->tanggal_lahir->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <td class="label-cell">Jenis Kelamin</td>
            <td>: {{ $kartu->pencariKerja->jenis_kelamin }}</td>
        </tr>
        <tr>
            <td class="label-cell">Alamat</td>
            <td>: {{ $kartu->pencariKerja->alamat }}</td>
        </tr>
        <tr>
            <td class="label-cell">Pendidikan Terakhir</td>
            <td>: {{ optional($kartu->pencariKerja->pendidikan)->jenjang ?? '-' }}</td>
        </tr>
        <tr>
            <td class="label-cell">Keterampilan (Skills)</td>
            <td>:
                @if($kartu->pencariKerja->skills->isNotEmpty())
                    {{ $kartu->pencariKerja->skills->pluck('nama')->implode(', ') }}
                @else
                    -
                @endif
            </td>
        </tr>
        <tr>
            <td class="label-cell">Berlaku Sampai Dengan</td>
            <td>: <strong>{{ $kartu->tanggal_berlaku->translatedFormat('d F Y') }}</strong></td>
        </tr>
    </table>

    <div class="ttd-container">
        <div class="ttd-box">
            Dikeluarkan pada tanggal: {{ $kartu->tanggal_terbit->translatedFormat('d F Y') }}<br>
            Pengantar Kerja / Petugas Pendaftar
            <br><br><br><br><br>
            ( .................................................. )
        </div>
        <div class="clear"></div>
    </div>

</body>

</html>