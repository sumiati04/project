@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Promo / Artikel</div>

                    <div class="card-body">
                        <form action="{{ route('promo.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Promo</label>
                                <input type="text" name="promo"
                                    class="form-control @error('promo') is-invalid @enderror">
                                @error('promo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Deskripsi Promo</label>
                                <input type="text" name="deskripsi_promo" class="form-control @error('deskripsi_promo') is-invalid @enderror"></input>
                                @error('deskripsi_promo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

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