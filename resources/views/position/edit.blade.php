@extends('layouts.app')

@section('content')
    <h1>Edit position</h1>

    <form action="{{ route('position.update', $position->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Kode:</label>
            <input type="text" name="code" id="code" class="form-control" value="{{ $position->code }}" required>
        </div>
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $position->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
