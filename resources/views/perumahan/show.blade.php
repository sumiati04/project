@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._flash')
            <div class="card border-secondary">
                <div class="card-header mb-3">Data Perumahan </div>

                <div class="card-body">

                    <div class="mb-3">
                        <label for="">Luas Rumah</label>
                        <input type="text" name="luas_rumah" class="form-control" readonly value="{{ $perumahan->luas_rumah }}">
                        </input>
                    </div>
                    <div class="mb-3">
                        <label for="">Fasilitas Rumah</label>
                        <input type="text" name="fasilitas_rumah" class="form-control" readonly value="{{ $perumahan->fasilitas_rumah}}">
                        </input>
                    </div>
                    <div class="mb-3">
                        <label for="">Harga</label>
                        <input type="number" name="harga" class="form-control" readonly value="{{ $perumahan->harga}}">
                        </input>
                    </div>

                    <div class="mb-3">
                        <div class="d-grid gap-2">
                            <a href="{{ route('perumahan.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
