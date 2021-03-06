@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tampilan Data
                </div>
                <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Wali</label>
                            <input type="text" name="nama" class="form-control" value="{{$wali->nama}}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Nomor Siswa</label>
                            <input type="text" name="id_dosen" class="form-control" value="{{$wali->mahasiswa->nama}}" readonly>
                        </div>

                        <div class="form-group">
                            <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
