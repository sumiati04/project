@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._flash')
            <div class="card border-secondary">
                <div class="card-header mb-3">Data Tipe </div>

                <div class="card-body">

                    <div class="mb-3">
                        <label for="">Tipe Rumah</label>
                        <input type="text" name="tipe_rumah" value="{{ $tipe->tipe_rumah }}" class="form-control" readonly>
                    </div>

                    <div class="mb-3">
                        <div class="d-grid gap-2">
                            <a href="{{ route('tipe.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection