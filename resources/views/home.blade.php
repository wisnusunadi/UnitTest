@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Club</div>
                <div class="card-body">
                    <a type="button" class="btn btn-primary" href="/tambah">Tambah</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Negara</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$d->nama}}</td>
                                <td>{{$d->negara}}</td>
                                <td><a type="button" href="/edit/{{$d->id}}" class="btn btn-warning">Edit</a>&nbsp;&nbsp;
                                    <form action="{{ url('/hapus', ['id' => $d->id]) }}" method="post">
                                        <input class="btn btn-danger" type="submit" value="Hapus" />
                                        <input type="hidden" name="_method" value="delete" />
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
@endsection