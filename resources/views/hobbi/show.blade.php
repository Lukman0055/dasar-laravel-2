@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tampilan Data Hobbi
                </div>
                <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Hobbi</label>
                            <input type="text" name="nama" class="form-control" value="{{$hobbi->hobbi}}" readonly>
                        </div>

                        <div class="form-group">
                            <a href="{{url()->previous()}}" class="btn btn-outline-primary">Kembali</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
