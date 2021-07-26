@extends('frontend.layout')
@section('title', 'PORTOFOLIO')
@section('content')
<div class="row">
    <div class="col-md-8 col-sm-8 col-xs-12 content">
        <br>
        <div class="content__judul">
            <h1>{{$portofolio->judul}}</h1>
        </div>
        <br>
        <div class="content__gambar">
            <img src="{{asset('/gambar_portofolio/'.$portofolio->gambar)}}" class="img-responsive">
        </div>
        <br>
        <br>
        <div class="content__isi">
            {!! $portofolio->deskripsi !!}
        </div>
        <br>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12 content__list">
        <h2 class="mt-5"><b>Protofolio Lainnya</b></h2>
        @foreach($lsitPortofolio as $item)
        <hr>
        <div class="portfolio-item padding-right-zero mr-btn-15">
            <a href="/lihat-portofolio/{{$item->id}}/{{Str::kebab($item->judul)}}">
                <figure>
                    <img src="{{asset('/gambar_portofolio/'.$item->gambar)}}" class="img-responsive">
                    <figcaption>
                        <h2>{{$item->judul}}</h2>
                        <p>{!! Str::limit($item->deskripsi, 100) !!}</p>
                    </figcaption>
                </figure>
            </a>
        </div>
        @endforeach
        <br>
    </div>
</div>
@endsection
{{-- @yield('content') --}}
