@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('massage'))
                <div class="alert alert-success" role="alert">
                    {{ session('massage') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    Hobbi
                <a href="{{route('hobbi.create')}}" class="float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Hobbi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($hobbi as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->hobbi}}</td>
                                    <td>
                                        <form action="{{route('hobbi.destroy',$data->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('hobbi.show',$data->id)}}" class="btn btn-outline-success">Lihat</a> |
                                        <a href="{{route('hobbi.edit',$data->id)}}" class="btn btn-outline-secondary">Edit</a> |
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah Yakin Akan Dihapus?')">
                                        Hapus</button>
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
@endsection
