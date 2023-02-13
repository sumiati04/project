@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._flash')
            <div class="card border-secondary">
            <div class="card-header mb-3">Data Pemesan</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No HP</th>
                                    <th>Alamat</th>
                                </tr>

                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($pemesanan as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama_pemesan }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->no_hp }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>
                                        <form action="{{ route('pemesanan.destroy', $data->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a href="{{ route('pemesanan.edit', $data->id) }}" class="btn btn-sm btn-outline-warning">Edit
                                            </a> |
                                            <a href="{{ route('pemesanan.show', $data->id) }}" class="btn btn-sm btn-outline-info">Show
                                            </a>
                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are You Sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
