@extends('admin/layout/main')

@section('breadcrumbs')
    <!-- Add breadcrumb navigation if needed -->
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('admin/laporanformadd') }}" class="btn btn-success btn-sm">
                    <i class="ti ti-plus"></i>
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Laporan</th>
                                <th scope="col">Nama Pelapor</th>
                                <th scope="col">Perihal</th>
                                <th scope="col">Lokasi Kejadian</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($laporans as $index => $laporan)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $laporan->id }}</td>
                                    <td>{{ $laporan->nama_pelapor }}</td>
                                    <td>{{ $laporan->perihal }}</td>
                                    <td>{{ $laporan->lokasi_kejadian }}</td>
                                    <td>{{ strlen($laporan->deskripsi_kejadian) > 50 ? substr($laporan->deskripsi_kejadian, 0, 50) . '...' : $laporan->deskripsi_kejadian }}</td>
                                    <td>{{ $laporan->tgl_waktu_kejadian }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('admin/laporan/' . $laporan->id) }}" class="btn btn-primary btn-sm">
                                            <i class="ti ti-info-circle"></i>
                                        </a>
                                        <!-- Add more actions if needed -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete() {
            var confirmation = confirm("Apakah Anda yakin ingin menghapus laporan ini?");
            return confirmation;
        }
    </script>
@endsection
