@extends('layouts.navmasyarakat')
@section('content')
<div class="button my-2">
    
</div>
<h4 class="my-3">Daftar Aduan Publik </h4>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if (session('error'))
      <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
        <strong>{{ session('error') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col"class="text-center">No</th>
                <th scope="col" class="text-center">Tanggal Pengaduan</th>
                <th scope="col" class="text-center">Nama</th>
                <th scope="col">Isi Laporan</th>
                <th scoope="col">Status</th>
                <th scope="col">Jenis Aduan</th>
                <th scope="col">Foto</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduans as $pengaduan)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ $pengaduan->tgl_pengaduan }}</td>
                <td>{{ $pengaduan->getDataMasyarakat->nama }}</td>
                <td>{{ $pengaduan->isi_laporan }}</td>
                <td>{{ $pengaduan->status }}</td>
                <td>{{ $pengaduan->jenis_aduan }}</td>
                <td><img src="{{ asset($pengaduan->foto) }}" alt="" width="100px"></td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
   
@endsection