@extends('layouts/main')
@section('title', "Caseip")
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="/caseip/formadd" class="btn btn-primary"><i class="bi bi-plus-square-fill"></i>Add Case Ip</a>
        </div>
        <div class="card-body"><table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>id</th>
                <th>tipeiphone</th>
                <th>warna</th>
                <th>stok</th>
                <th>harga</th>
                <th>gambar</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cs as $idx => $m)    
            <tr>
                <td>{{ $idx + 1 }}</td>
                <td>{{ $m -> id }}</td>
                <td>{{ $m -> tipeiphone }}</td>
                <td>{{ $m -> warna }}</td>
                <td>{{ $m -> stok }}</td>
                <td>{{ $m -> harga }}</td>
                <td>
                    <img src="{{asset('/storage/'.$m->gambar)}}" alt="{{$m->gambar}}" height="80" width="80">
                </td>
                <td>
                    <a href="/caseip/edit/{{ $m->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                    <a href="/caseip/delete/{{ $m->id }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table></div>
    </div>
@endsection
