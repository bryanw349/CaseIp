@extends('layouts.main')
@section('title', 'Form Add Caseip')
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="/save" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>tipeiphone</label>
                    <input type="text" name="tipeiphone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>warna</label>
                    <input type="text" name="warna" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>stok</label>
                    <input type="text" name="stok" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>harga</label>
                    <input type="text" min="0" max="8" name="harga" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>gambar</label>
                    <input type="file" accept="image/*" name="gambar" class="form-control-file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
    </div>
@endsection