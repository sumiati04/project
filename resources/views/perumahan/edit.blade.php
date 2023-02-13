@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._flash')
            <div class="card border-secondary">
                <div class="card-header mb-3">Data Perumahan</div>

                <div class="card-body">
                    <form action="{{ route('perumahan.update', $perumahan->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="">Luas Rumah</label>
                            <input type="text" name="luas_rumah" class="form-control @error('luas_rumah') is-invalid @enderror" value="{{ $perumahan->luas_rumah }}">
                            </input>
                        </div>
                        @error('luas_rumah')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="mb-3">
                            <label for="">Fasilitas Rumah</label>
                            <input type="text" name="fasilitas_rumah" class="form-control @error('fasilitas_rumah') is-invalid @enderror" value="{{ $perumahan->fasilitas_rumah }}">
                            </input>
                            @error('fasilitas_rumah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Harga</label>
                            <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ $perumahan->harga }}"></input>
                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">ID Tipe</label>
                            <select name="id_tipe" class="form-control @error('id_tipe') is-invalid @enderror">
                                @php $no = 1; @endphp
                                @foreach ($tipe as $data)
                                    <option value="{{ $data->id }}">{{ $data->tipe_rumah }}</option>
                                @endforeach
                            </select>
                            @error('id_tipe')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="from-label">Foto</label>
                            @if (isset)
                            <p>
                                <img src="" alt="">
                            </p>
                            @endif
                            <input type="file" class="form-control @error('foto') is-invalid @enderror"
                            name="foto" value="{{ image/fotorumah }}">
                            @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
