<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aplikasi Laporan Pengaduan Masyarakat</title>
    </head>
    <body>
        <span><strong>Nama Petugas: </strong>{{ Auth::guard('petugas')->user()->nama_petugas }}</span>
        <table border="1" cellpadding="2" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Pengaduan</th>
                    <th>Isi Aduan</th>
                    <th>Isi Tanggapan</th>
                    <th>NIK Pelapor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tanggapans as $tanggapan)
                <tr>
                    <td>{{ $loop->iteration }}.</td>
                    <td>{{ $tanggapan->getStatusPengaduan->tgl_pengaduan }}</td>
                    <td>{{ $tanggapan->getStatusPengaduan->isi_laporan }}</td>
                    <td>{{ $tanggapan->tanggapan }}</td>
                    <td>{{ $tanggapan->getStatusPengaduan->nik }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>