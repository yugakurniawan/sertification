@extends('layouts.main')

@section('container')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Meeting : {{ $meeting_student->meeting->nama }}</h3>
                            <br>
                            <a href="/students/{{ $meeting_student->student_id }}/profile" class="btn btn-primary">Kembali</a>

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
                                        <th scope="col">#</th>
                                        <th scope="col">Jadwal</th>
                                        <th scope="col">Kehadiran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($meeting_student->kehadiran as $kehadiran)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $kehadiran->jadwal->jadwal }}</td>
                                        <td>
                                            @if ($kehadiran->status ==1)
                                                Hadir
                                            @else
                                                Tidak Hadir
                                            @endif
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


