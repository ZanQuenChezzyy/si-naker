<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Kartu AK-1 - {{ $kartu->nomor_ak1 }}</title>
    <style>
        @page {
            /* Margin kertas disesuaikan agar lega */
            margin: 25px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 11px;
            color: #000;
            line-height: 1.4;
        }

        /* Container utama pembungkus fisik kartu */
        .kartu-wrapper {
            width: 100%;
            border: 2px solid #000;
            background-color: #fff;
            /* Hindari terpotong halaman */
            page-break-inside: avoid;
        }

        /* Layout Utama 2 Kolom */
        .main-layout {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
            /* Memaksa proporsi kolom tetap */
        }

        .main-layout td.kolom-utama {
            vertical-align: top;
            width: 50%;
            /* Dibagi rata 50:50 agar presisi saat dilipat */
            padding: 15px 20px;
        }

        .sisi-kiri {
            border-right: 1px dashed #000;
            /* Garis lipatan */
        }

        /* ================= KIRI: KETENTUAN ================= */
        .title-ketentuan {
            font-weight: bold;
            text-align: center;
            text-decoration: underline;
            margin-bottom: 12px;
            font-size: 12px;
        }

        ol.list-ketentuan {
            padding-left: 18px;
            margin: 0 0 20px 0;
            text-align: justify;
        }

        ol.list-ketentuan li {
            margin-bottom: 6px;
        }

        /* Tabel Laporan Berkala */
        .title-laporan {
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 11px;
        }

        table.tabel-laporan {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        table.tabel-laporan th {
            border: 1px solid #000;
            padding: 6px 4px;
            font-size: 10px;
            background-color: #f2f2f2;
        }

        table.tabel-laporan td {
            border: 1px solid #000;
            padding: 4px;
            font-size: 10px;
            /* Memberi ruang kosong untuk cap/ttd asli */
            height: 65px;
            vertical-align: top;
        }

        .teks-abu {
            color: #555;
            font-size: 9px;
            margin-top: 5px;
        }

        /* ================= KANAN: BIODATA ================= */
        .kop-disnaker {
            text-align: center;
            margin-bottom: 15px;
        }

        .kop-disnaker h3 {
            margin: 0;
            font-size: 13px;
        }

        .kop-disnaker h2 {
            margin: 3px 0;
            font-size: 15px;
            font-weight: bold;
        }

        .kop-disnaker p {
            margin: 0;
            font-size: 9px;
            font-style: italic;
            border-bottom: 2px solid #000;
            /* Garis kop surat */
            padding-bottom: 5px;
        }

        .judul-kartu {
            text-align: center;
            font-weight: bold;
            font-size: 13px;
            margin-top: 10px;
            text-decoration: underline;
        }

        .nomor-kartu {
            text-align: center;
            font-size: 11px;
            margin-bottom: 15px;
            margin-top: 3px;
        }

        /* Tabel Biodata */
        table.tabel-biodata {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table.tabel-biodata td {
            padding: 4px 0;
            vertical-align: top;
        }

        .w-label {
            width: 35%;
            font-weight: bold;
        }

        .w-titik {
            width: 3%;
            text-align: center;
        }

        /* Area TTD dan Foto */
        table.tabel-ttd {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            margin-top: 10px;
        }

        table.tabel-ttd td {
            /* Agar tulisan nama di bawah sejajar semua */
            vertical-align: bottom;
        }

        .box-foto {
            width: 3cm;
            height: 4cm;
            border: 1px solid #000;
            margin: 0 auto;
            overflow: hidden;
            /* Menjaga agar gambar tidak keluar dari kotak border */
            background-color: #fafafa;
        }

        .box-foto img {
            width: 100%;
            height: 100%;
            display: block;
        }

        .text-fallback {
            line-height: 4cm;
            /* Memusatkan teks fallback secara vertikal */
            font-size: 10px;
            color: #555;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="kartu-wrapper">
        <table class="main-layout">
            <tr>
                <td class="kolom-utama sisi-kiri">
                    <div class="title-ketentuan">KETENTUAN BAGI PENCARI KERJA</div>
                    <ol class="list-ketentuan">
                        <li>Berlaku untuk 2 (dua) tahun sejak tanggal dikeluarkan.</li>
                        <li>Apabila belum mendapat pekerjaan wajib melapor setiap 6 (enam) bulan sekali terhitung sejak
                            tanggal pendaftaran.</li>
                        <li>Apabila telah mendapat pekerjaan wajib melaporkan ke Dinas Tenaga Kerja.</li>
                        <li>Apabila kartu ini hilang/rusak segera melapor ke Dinas Tenaga Kerja dengan membawa surat
                            keterangan kehilangan dari Kepolisian.</li>
                    </ol>

                    <div class="title-laporan">KOLOM LAPORAN PERIODE BERKALA:</div>
                    <table class="tabel-laporan">
                        <thead>
                            <tr>
                                <th style="width: 12%;">Laporan<br>Ke</th>
                                <th style="width: 28%;">Tgl Melapor</th>
                                <th style="width: 35%;">Tanda Tangan<br>Petugas</th>
                                <th style="width: 25%;">Cap Disnaker</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding-top: 10px;">I</td>
                                <td style="text-align: left;">
                                    <div class="teks-abu">Tgl: ....../....../20....</div>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="padding-top: 10px;">II</td>
                                <td style="text-align: left;">
                                    <div class="teks-abu">Tgl: ....../....../20....</div>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="padding-top: 10px;">III</td>
                                <td style="text-align: left;">
                                    <div class="teks-abu">Tgl: ....../....../20....</div>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </td>

                <td class="kolom-utama sisi-kanan">
                    <div class="kop-disnaker">
                        <h3>PEMERINTAH KABUPATEN / KOTA KITA</h3>
                        <h2>DINAS TENAGA KERJA</h2>
                        <p>Alamat: Jl. Perkantoran No. 123 Telp. (021) 1234567 Fax. 123456</p>
                    </div>

                    <div class="judul-kartu">KARTU TANDA BUKTI PENDAFTARAN PENCARI KERJA</div>
                    <div class="nomor-kartu"><strong>No. Pendaftaran :</strong> {{ $kartu->nomor_ak1 }}</div>

                    <table class="tabel-biodata">
                        <tr>
                            <td class="w-label">1. NIK KTP</td>
                            <td class="w-titik">:</td>
                            <td>{{ $kartu->pencariKerja->nik }}</td>
                        </tr>
                        <tr>
                            <td class="w-label">2. Nama Lengkap</td>
                            <td class="w-titik">:</td>
                            <td style="text-transform: uppercase; font-weight: bold;">{{ $kartu->pencariKerja->nama }}
                            </td>
                        </tr>
                        <tr>
                            <td class="w-label">3. Tempat/Tgl. Lahir</td>
                            <td class="w-titik">:</td>
                            <td>{{ $kartu->pencariKerja->tempat_lahir }},
                                {{ $kartu->pencariKerja->tanggal_lahir->translatedFormat('d F Y') }}
                            </td>
                        </tr>
                        <tr>
                            <td class="w-label">4. Jenis Kelamin</td>
                            <td class="w-titik">:</td>
                            <td>{{ $kartu->pencariKerja->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td class="w-label">5. Pendidikan Terakhir</td>
                            <td class="w-titik">:</td>
                            <td>{{ optional($kartu->pencariKerja->pendidikan)->jenjang ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="w-label">6. Keterampilan / Skill</td>
                            <td class="w-titik">:</td>
                            <td>
                                @if($kartu->pencariKerja->skills->isNotEmpty())
                                    {{ $kartu->pencariKerja->skills->pluck('nama')->implode(', ') }}
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="w-label">7. Berlaku s.d</td>
                            <td class="w-titik">:</td>
                            <td><strong
                                    style="color: red;">{{ $kartu->tanggal_berlaku->translatedFormat('d F Y') }}</strong>
                            </td>
                        </tr>
                    </table>

                    <table class="tabel-ttd">
                        <tr>
                            <td style="width: 25%;">
                                <div class="box-foto">
                                    {{-- Mengambil pas_photo dari storage/app/public/ --}}
                                    @if($kartu->pencariKerja && $kartu->pencariKerja->pas_photo)
                                        @php
                                            $fotoPath = storage_path('app/public/' . $kartu->pencariKerja->pas_photo);
                                        @endphp

                                        @if(file_exists($fotoPath))
                                            <img src="{{ $fotoPath }}" alt="Pas Photo">
                                        @else
                                            <div class="text-fallback">PAS FOTO 3x4</div>
                                        @endif
                                    @else
                                        <div class="text-fallback">PAS FOTO 3x4</div>
                                    @endif
                                </div>
                            </td>
                            <td style="width: 35%;">
                                Tanda Tangan<br>Pencari Kerja
                                <br><br><br><br><br>
                                ( <strong>{{ $kartu->pencariKerja->nama }}</strong> )
                            </td>
                            <td style="width: 40%;">
                                Diterbitkan : {{ $kartu->tanggal_terbit->translatedFormat('d F Y') }}<br>
                                Pengantar Kerja / Petugas Resmi
                                <br><br><br><br><br>
                                <u><strong>NAMA PETUGAS, S.E.</strong></u><br>
                                NIP. 19900101 201501 1 002
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

</body>

</html>