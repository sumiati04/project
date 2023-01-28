@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Data Perumahan
                <a href="{{ route('perumahan.create') }}" class="btn btn-sm btn-outline-primary" style="float: right">
                    Tambah Data
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable">
                        <thead>
                            <th>No</th>
                            <th>Luas Rumah</th>
                            <th>Fasilitas Rumah</th>
                            <th>Harga</th>
                            <th>Tipe</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($perumahan as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->luas_rumah }}</td>
                                <td>{{ $data->fasilitas_rumah }}</td>
                                <td>{{ $data->harga }}</td>
                                <td>{{ $data->tipe->tipe_rumah }}</td>
                                <td>
                                    <form action="{{ route('perumahan.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('perumahan.edit', $data->id) }}" class="btn btn-sm btn-outline-success">
                                            Edit
                                        </a> |
                                        <a href="{{ route('perumahan.show', $data->id) }}" class="btn btn-sm btn-outline-warning">
                                            Show
                                        </a> |
                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete
                                        </button>
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
@endsection