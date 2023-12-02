@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data</div>
                <div class="card-body">
                    <form action="/store" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Club</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Negara</label>
                            <div class="col-sm-10">
                                <input type="text" name="negara" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a type="button" class="btn btn-danger" href="/home">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection