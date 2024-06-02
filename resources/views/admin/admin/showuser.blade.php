@extends('admin/layout/main')

@section('breadcrumbs')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('admin/users/formadd') }}" class="btn btn-success btn-sm">
                    <i class="ti ti-plus"></i>
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">id</th>
                                <th scope="col">nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Email</th>
                                <th scope="col">password_hash</th>\
                                
                                <th scope="col">Aksi</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $index => $user)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $user->id}}</td>
                                    <td>{{ $user->name}}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->password }}</td>
                                    
                                    <td class="text-center">
                                        <a href="{{ url('admin/users/delete/'. $user->id) }}" class="btn btn-danger btn-sm"  onclick="return confirmDelete()">
                                            <i class="ti ti-trash"></i>
                                        </a>
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
        var confirmation = confirm("Apakah Anda yakin ingin menghapus post ini?");
        return confirmation;
    }
</script>
@endsection
