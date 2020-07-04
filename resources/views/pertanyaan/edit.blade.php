@extends('layout.master')

@section('content')
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Edit Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan/{{ $p->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card-body">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" value="{{ $p->judul }}" id="judul" name="judul"
                    placeholder="Masukan judul pertanyaan" required>
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <textarea name="isi" id="isi" class="form-control" cols="30" rows="10"
                    placeholder="Masukan isi pertanyaan" required>{{ $p->isi }}</textarea>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Update</button>
        </div>
    </form>
</div>
@endsection
