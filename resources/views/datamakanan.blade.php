@extends('layout.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Makanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Data Makanan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <a href="/tambahmakanan" class="btn btn-success">Add Data</a>
        <div class="row mt-5">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
              </div>
            @endif
            @if ($message = Session::get('primary'))
            <div class="alert alert-primary" role="alert">
                {{ $message }}
              </div>
            @endif
            @if ($message = Session::get('danger'))
            <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @endif
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Komposisi</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tanggal Dibuat</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $index => $row)
                    <tr>
                        <th scope="row">{{ $index + $data->firstItem() }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>
                            <img src="{{ asset('fotomakanan/'.$row->foto) }}" alt="" style="width:90px">
                        </td>
                        <td>{{ $row->jenis }}</td>
                        <td>{{ $row->komposisi }}</td>
                        <td>{{ $row->categories->nama }}</td>
                        <td>{{ $row->ttl }}</td>
                        <td>
                            <a href="/tampilmakanan/{{ $row->id }}" class="btn btn-info">Update</a>
                            <a href="/deletemakanan/{{ $row->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
              {{ $data->links() }}
        </div>
    </div>
</div>
@endsection

