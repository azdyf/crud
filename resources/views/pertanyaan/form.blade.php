@extends('layout.master')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Pertanyaan Baru</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan judul pertanyaan"
                    required>
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <textarea name="isi" id="isi" class="form-control" cols="30" rows="10"
                    placeholder="Masukan isi pertanyaan" required></textarea>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
@endsection
