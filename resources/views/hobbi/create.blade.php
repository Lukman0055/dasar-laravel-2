@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Hobbi
                </div>
                <div class="card-body">
                    <form action="{{route('hobbi.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Hobbi</label>
                            <input type="text" name="hobbi" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            <a href="{{url()->previous()}}" class="btn btn-outline-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
