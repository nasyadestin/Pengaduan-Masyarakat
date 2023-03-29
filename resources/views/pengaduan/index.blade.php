@extends('layouts.navmasyarakat')
@section('content')

<div class="card mt-4">
    <div class="card-body py-4 px-4 d-flex justify-content-between">
        <div class="d-flex align-items-center">
            <div class="ms-3 name">
                <h5 class="font-bold">Hello! {{ Auth::guard('masyarakat')->user()->nama }}</h5>
            </div>
        </div>
    </div>
</div>
 
<div class="button my-2 mt-2">
    <a type="button" class="btn btn-success px-4 " href="{{ url('/pengaduan/tambah') }}">
        Create</a>
</div>
<h4 class="my-3">Daftar Aduan  </h4>
    
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
                <th scope="col">Isi Laporan</th>
                <th scoope="col">Status</th>
                <th scope="col">Jenis Aduan</th>
                <th scope="col">Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduans as $pengaduan)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ $pengaduan->tgl_pengaduan }}</td>
                <td>{{ $pengaduan->isi_laporan }}</td>
                <td>{{ $pengaduan->status }}</td>
                <td>{{ $pengaduan->jenis_aduan}}</td>
                <td><img src="{{ asset($pengaduan->foto) }}" alt="" width="100px"></td>
                <td>
                    <form action="/pengaduan/delete/{{$pengaduan->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-primary" href="/pengaduan/edit/{{$pengaduan->id}}">Edit</a>
        
                    <button type="submit" class="btn btn-danger">
                    <img src="{{ asset('assets/icons/trash3.svg') }}" class="mb-1"width="20px" alt="">
                    </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection