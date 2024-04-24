@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Tambah Speaker Baru</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('speaker.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Code:</label>
                    <input type="text" name="code" id="code" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" id="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Sosmed:</label>
                    <input type="text" name="sosmed" id="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Photo:</label>
                    <input type="file" name="photo" id="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <select name="position_id" class="form-control">
                        <option>-- Pilih --</option>
                        @foreach ($position as $position)
                            <option value="{{ $position->id }}">{{ $position->name }}</option>
                        @endforeach
                    </select>
                </div>
                <a href="{{ route('position.index') }}" class="btn btn-danger btn-sm">Back</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </form>
        </div>
    </div>
@endsection
