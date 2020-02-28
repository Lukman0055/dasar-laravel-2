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
                    <form action="{{route('mahasiswa.update',$mhs->id)}}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{$mhs->nama}}" required>
                        </div>

                        <div class="form-group">
                            <label for="">Nomor Induk</label>
                            <input type="text" name="nim" class="form-control" value="{{$mhs->nim}}" required>
                        </div>

                        <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <select name="id_dosen" class="form-control">
                                @foreach ($dosen as $data)
                                    <option value="{{$data->id}}" @if($data->nama == $mhs->dosen->nama)
                                    selected
                                    @endif
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
