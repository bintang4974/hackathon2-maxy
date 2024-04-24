@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Tambah Speaker Baru</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('speaker.update', $speaker->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Code:</label>
                    <input type="text" name="code" id="code" value="{{ $speaker->code }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" id="title" value="{{ $speaker->name }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Sosmed:</label>
                    <input type="text" name="sosmed" id="title" value="{{ $speaker->sosmed }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Photo:</label>
                    <input type="file" name="photo" id="title" class="form-control-file" required>
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <select name="position_id" id="position_id" class="form-control">
                        @php
                            $selected = '';
                            if ($errors->any()) {
                                $selected = old('position_id');
                            } else {
                                $selected = $speaker->position_id;
                            }
                        @endphp
                        @foreach ($position as $position)
                            <option value="{{ $position->id }}" {{ $selected == $position->id ? 'selected' : '' }}>
                                {{ $position->code . ' - ' . $position->name }}</option>
                        @endforeach
                    </select>
                    @error('position_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <a href="{{ route('position.index') }}" class="btn btn-danger btn-sm">Back</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </form>
        </div>
    </div>
@endsection
