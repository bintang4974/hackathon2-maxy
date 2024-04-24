@extends('layouts.template')

@section('content')
    <h4>Daftar Pendaftaran</h4>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif

    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Event Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Event</th>
                            <th>Tanggal Event</th>
                            <th>Nama Pengguna</th>
                            <th>Status Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($eventUsers as $eventUser)
                            <tr>
                                <td>{{ $eventUser->id }}</td>
                                <td>{{ $eventUser->event->title }}</td>
                                <td>{{ $eventUser->event->date }}</td>
                                <td>{{ $eventUser->user->name }}</td>
                                <td>
                                    {{ $eventUser->is_paid ? 'Sudah Bayar' : 'Belum Bayar' }}
                                    <form action="{{ route('event_users.updatePaymentStatus', $eventUser->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-sm btn-primary btn-sm" onclick="return confirm('Apakah Anda yakin ingin mengubah status pembayaran?')">
                                        Ubah Status
                                    </button>
                                </form>
                                </td>
                                <td>
                                    <a href="{{ route('event_users.show', $eventUser->id) }}" class="btn btn-sm btn-info">Lihat</a>
                                    {{-- <a href="{{ route('event_users.edit', $eventUser->id) }}" class="btn btn-sm btn-warning">Edit</a> --}}
                                    <form action="{{ route('event_users.destroy', $eventUser->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus event user ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
