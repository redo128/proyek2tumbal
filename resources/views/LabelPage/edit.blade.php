@extends('HomePage.layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Merk
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('label.update', $label->id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_label">Nama label</label>
                        <input type="text" name="nama_label" class="form-control" id="nama_label" value="{{ $label->nama_label }}" aria-describedby="nama_label">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskrip</label>
                        <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{ $label->deskripsi }}" aria-describedby="deskripsi">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-success mt-2 mb-2" href="{{ route('label.index') }}">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection