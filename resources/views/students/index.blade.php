@extends('layouts.main')

@section('container')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Beasiswa</h3>
                            <br>
                            <a href="/students/create" class="btn btn-primary">Tambah Data</a>

                            @if (session('status'))
                            <div class="alert alert-success" style="margin-top:20px">
                                {{ session('status') }}
                            </div>
                            @endif

                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Universitas</th>
                                        <th scope="col">Angkatan</th>
                                        <th scope="col" width="400px">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td><a href="/students/{{ $student->id}}/profile">{{ $student->nama}}</a></td>
                                        <td>{{ $student->universitas}}</td>
                                        <td>{{ $student->angkatan}}</td>
                                        <td>
                                            <a href="/students/{{ $student->id}}/profile" class="btn btn-info btn-sm">
                                                Detail
                                            </a>
                                            <a href="/students/cetak1/{{$student->id}}" target="_blank" class="btn btn-warning btn-sm">Cetak 1</a>
                                            <a href="/students/cetak2/{{$student->id}}" target="_blank" class="btn btn-warning btn-sm">Cetak 2</a>
                                            <a href="/students/{{ $student->id}}" class="btn btn-danger btn-sm"
                                                onclick="event.preventDefault(); $(this).siblings('form').submit();">Hapus</a>
                                            <form action="/students/{{$student->id}}" method="post">
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
