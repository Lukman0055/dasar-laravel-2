<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eloquent</title>
</head>
<body>
    @extends('layouts.template')
    @section('konten')
    @foreach ($mahasiswa as $data)
        <h3>{{$data->nama}}</h3>
        <h5>Hobi :
            @foreach ($data->hobbi as $val)
        <small>{{$val->hobbi}}</small>
            @endforeach
        </h5>
        <h4>
            <li>
                Nama Wali : <strong>{{$data->wali->nama}}</strong>
            </li>
            <li>
                Dosen Pembimbing : <strong>{{$data->dosen->nama}} <small> {{$data->nip}}</small></strong>
            </li>
        </h4>
        <hr>
    @endforeach
    @endsection
</body>
</html>
