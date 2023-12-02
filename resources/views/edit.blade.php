@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data</div>
                <div class="card-body">
                    <form action="/update/{{$data->id}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Club</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Negara</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="negara" value="{{$data->negara}}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <a type="submit" class="btn btn-danger" href="/home">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection