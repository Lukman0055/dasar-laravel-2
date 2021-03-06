@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                    <form action="{{route('wali.update',$wali->id)}}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Wali</label>
                            <input type="text" name="nama" class="form-control" value="{{$wali->nama}}" required>
                        </div>

                        <div class="form-group">
                            <label for="">Nama Siswa</label>
                            <select name="id_mahasiswa" class="form-control">
                                @foreach ($mhs as $data)
                                    <option value="{{$data->id}}" {{$data->nama == $wali->id_mahasiswa ? "selected": ""}}
                                    >{{$data->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{url()->previous()}}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
