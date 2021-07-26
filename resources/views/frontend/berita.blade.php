@extends('frontend.layout')
@section('title', 'BERITA')
@section('content')
<div class="row">
    <div class="col-md-8 col-sm-8 col-xs-12 content">
        <br>
        <div class="content__judul">
            <h1>{{$berita->judul_berita}}</h1>
            <p>by <b>{{$berita->publisher}}</b> - <i class="fa fa-calendar"></i>
                {{$berita->created_at->format('d F Y')}}</p>
        </div>
        <br>
        <div class="content__gambar">
            <img src="{{asset('/gambar_berita/'.$berita->gambar)}}" class="img-responsive">
        </div>
        <br>
        <br>
        <div class="content__isi">
            {!! $berita->isi_berita !!}
        </div>
        <br>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12 content__list">
        <h2 class="mt-5"><b>Berita Lainnya</b></h2>
        @foreach($listBerita as $item)
        <hr>
        <div class="blog-sec">
            <div class="blog-img">
                <a href="/lihat-berita/{{$item->id}}/{{Str::kebab($item->judul_berita)}}">
                    <img src="{{asset('/gambar_berita/'.$item->gambar)}}" class="img-responsive">
                </a>
            </div>
            <div class="blog-info">
                <h4>{{$item->judul_berita}}</h4>
                <div class="blog-comment">
                    <p><i class="fa fa-calendar"></i> {{$item->created_at->format('d m Y')}}</p>
                    <p>
                        <span><a href="#"><i class="fa fa-eye"></i></a> {{$item->views}}</span></p>
                </div>
            </div>
        </div>
        @endforeach
        <br>
    </div>
</div>
@endsection
{{-- @yield('content') --}}
