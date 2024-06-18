@extends('admin/layout/main')

@section('breadcrumbs')
    <!-- Add breadcrumb navigation if needed -->
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3>Detail Laporan</h3>
                <table class="table table-bordered">
                    <tr>
                        <th>ID Laporan</th>
                        <td>{{ $laporan->id }}</td>
                    </tr>
                    <tr>
                        <th>Nama Pelapor</th>
                        <td>{{ $laporan->nama_pelapor }}</td>
                    </tr>
                    <tr>
                        <th>Gender Pelapor</th>
                        <td>{{ $laporan->gender_pelapor }}</td>
                    </tr>
                    <tr>
                        <th>No Identitas Pelapor</th>
                        <td>{{ $laporan->no_iden_pelapor }}</td>
                    </tr>
                    <tr>
                        <th>Prodi Pelapor</th>
                        <td>{{ $laporan->prodi_pelapor }}</td>
                    </tr>
                    <tr>
                        <th>No HP Pelapor</th>
                        <td>{{ $laporan->no_hp_pelapor }}</td>
                    </tr>
                    <tr>
                        <th>Email Pelapor</th>
                        <td>{{ $laporan->email_pelapor }}</td>
                    </tr>
                    <tr>
                        <th>Nama Korban</th>
                        <td>{{ $laporan->nama_korban }}</td>
                    </tr>
                    <tr>
                        <th>Gender Korban</th>
                        <td>{{ $laporan->gender_korban }}</td>
                    </tr>
                    <tr>
                        <th>No Identitas Korban</th>
                        <td>{{ $laporan->no_iden_korban }}</td>
                    </tr>
                    <tr>
                        <th>Prodi Korban</th>
                        <td>{{ $laporan->prodi_korban }}</td>
                    </tr>
                    <tr>
                        <th>No HP Korban</th>
                        <td>{{ $laporan->no_hp_korban }}</td>
                    </tr>
                    <tr>
                        <th>Email Korban</th>
                        <td>{{ $laporan->email_korban }}</td>
                    </tr>
                    <tr>
                        <th>Perihal</th>
                        <td>{{ $laporan->perihal }}</td>
                    </tr>
                    <tr>
                        <th>Lokasi Kejadian</th>
                        <td>{{ $laporan->lokasi_kejadian }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi Kejadian</th>
                        <td>{{ $laporan->deskripsi_kejadian }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Waktu Kejadian</th>
                        <td>{{ $laporan->tgl_waktu_kejadian }}</td>
                    </tr>
                    <tr>
                        <th>Gambar</th>
                        <td>
                            @if($laporan->image)
                                <img src="{{ asset('storage/' . $laporan->image) }}" alt="Gambar Laporan" style="max-width: 100%;">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>
                    </tr>
                </table>
                <a href="{{ url('admin/laporans') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
