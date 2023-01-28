@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._flash')
            <div class="card border-secondary">
                <div class="card-header mb-3">Data Promo / Artikel</div>

                <div class="card-body">

                    <div class="mb-3">
                        <label for="">Promo</label>
                        <input type="text" name="promo" value="{{ $promo->promo }}" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="">Deskripsi Promo</label>
                        <input type="text" name="deskripsi_promo" class="form-control" readonly value="{{ $promo->deskripsi_promo }}">
                        </input>
                    </div>

                    <div class="mb-3">
                        <div class="d-grid gap-2">
                            <a href="{{ route('promo.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection