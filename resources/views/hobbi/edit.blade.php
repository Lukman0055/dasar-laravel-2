@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Data Hobbi
                </div>
                <div class="card-body">
                    <form action="{{route('hobbi.update',$hobbi->id)}}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Baru Hobbi</label>
                            <input type="text" name="hobbi" class="form-control" value="{{$hobbi->hobbi}}" required>
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
