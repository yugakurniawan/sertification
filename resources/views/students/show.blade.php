@extends('layouts.main')

@section('container')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Mahasiswa</h3>
                        </div>
                        <div class="panel-body">
                            <form class="mt-3">

                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{$student->nama}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Universitas</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{$student->universitas}}"
                                            readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Angkatan</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{$student->angkatan}}" readonly>
                                    </div>
                                </div>

                                <a href="/students/{{ $student -> id}}/edit" class="btn btn-warning">edit</a>
                                <a href="/students" class="btn btn-info ">kembali</a>

                            </form>
                        </div>
                    </div>
                    @endsection

                    @section('container1')
                    <div class="container">
                        <div class="row">
                            <div class="col mt-3">

                                <h1> Data Mahasiswa </h1>

                                <form class="mt-3">

                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" value="{{$student->nama}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Universitas</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" value="{{$student->universitas}}"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Angkatan</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" value="{{$student->angkatan}}"
                                                readonly>
                                        </div>
                                    </div>

                                    <a href="/students/{{ $student -> id}}/edit" class="btn btn-warning">edit</a>
                                    <a href="/students" class="btn btn-info ">kembali</a>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
