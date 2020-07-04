@extends('layout.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Pertanyaan</h3>
        <div class="card-tools">
            <a href="pertanyaan/create" class="btn btn-primary btn-sm">Tambah</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pertanyaan as $key => $p)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($p->judul, 30, $end='...') }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($p->isi, 50, $end='...') }}</td>
                    <td>
                        <a href="/pertanyaan/{{ $p->id }}" class="btn btn-sm btn-success">Lihat</a>
                        <a href="/pertanyaan/{{ $p->id }}/edit" class="btn btn-sm btn-info">edit</a>
                        <form action="/pertanyaan/{{ $p->id }}" method="POST" style="display: inline">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('yakin hapus?')"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
