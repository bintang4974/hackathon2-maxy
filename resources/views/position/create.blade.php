@extends('layouts.template')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Tambah Position Baru</h4>
        </div> 
        <div class="card-body">
            <form action="{{ route('position.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="speaker_id" value="{{ request()->query('speaker_id') }}">
                <div class="form-group">
                    <label>Code:</label>
                    <input type="text" name="code" id="code" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" id="title" class="form-control" required>
                </div>
                <a href="{{ route('speakers.index') }}" class="btn btn-danger btn-sm">Back</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </form>
        </div>
    </div>
@endsection
