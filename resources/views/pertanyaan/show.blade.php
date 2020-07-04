@extends('layout.master')

@section('content')
<div class="card card-widget">
    <div class="card-header">
        <div class="user-block">
            <img class="img-circle" src="{{ asset('adminlte/dist/img/user1-128x128.jpg')}}" alt="User Image">
            <span class="username"><a href="#">Anonymous</a></span>
            <span class="description">Created at
                {{ Carbon\Carbon::parse($p->created_at)->format('l, d F Y H:i:s') }}</span>
            @if (!empty($p->updated_at))
            <span class="description">Updated at
                {{ Carbon\Carbon::parse($p->updated_at)->format('l, d F Y H:i:s') }}</span>
            @endif
        </div>
        <!-- /.user-block -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <h3>{{ $p->judul }}</h3>

        <p>{{ $p->isi }}</p>

    </div>
    <!-- /.card-body -->
    <div class="card-footer card-comments">
        @foreach ($jawaban as $j)
        <div class="card-comment">
            <!-- User image -->
            <img class="img-circle img-sm" src="{{ asset('adminlte/dist/img/user3-128x128.jpg') }}" alt="User Image">

            <div class="comment-text">
                <span class="username">
                    Anonymous
                    <span class="text-muted float-right">{{ $j->created_at }}</span>
                </span><!-- /.username -->
                {{ $j->isi }}
                <div class="mt-2">
                    <!-- likes -->
                    <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                    <span class="float-right text-muted">45 likes</span>
                </div>
            </div>
            <!-- /.comment-text -->
        </div>
        @endforeach
    </div>
    <!-- /.card-footer -->
    <div class="card-footer">
        <form action="/jawaban/{{ $p->id }}" method="post">
            @csrf
            <img class="img-fluid img-circle img-sm" src="{{ asset('adminlte/dist/img/user4-128x128.jpg') }}"
                alt="Alt Text">
            <!-- .img-push is used to add margin to elements next to floating images -->
            <div class="img-push">
                <input type="text" name="isi" class="form-control form-control-sm"
                    placeholder="Tekan Enter untuk kirim jawaban">
            </div>
        </form>
    </div>
    <!-- /.card-footer -->
</div>
@endsection
