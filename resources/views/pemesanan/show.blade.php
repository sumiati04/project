@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._flash')
            <div class="card border-secondary">
                <div class="card-header mb-3">Data Pemesan </div>

                <div class="card-body">

                    <div class="mb-3">
                        <label for="">Nama</label>
                        <input type="text" name="nama_pemesan" value="{{ $pemesanan->nama_pemesan }}" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" readonly value="{{ $pemesanan->email }}">
                        </input>
                    </div>
                    <div class="mb-3">
                        <label for="">No HP</label>
                        <input type="integer" name="no_hp" class="form-control" readonly value="{{ $pemesanan->no_hp}}">
                        </input>
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control" readonly value="{{ $pemesanan->alamat}}">
                        </input>
                    </div>

                    <div class="mb-3">
                        <div class="d-grid gap-2">
                            <a href="{{ route('pemesanan.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection