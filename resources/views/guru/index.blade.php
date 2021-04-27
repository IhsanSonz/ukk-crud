@extends('layout.index')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($gurus as $guru)
        <tr>
            <th scope="row">{{$guru->id}}</th>
            <td>{{$guru->nama}}</td>
            <td>{{$guru->alamat}}</td>
            <td>
                <div class="column">
                    <button type="button" class="btn btn-warning">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection