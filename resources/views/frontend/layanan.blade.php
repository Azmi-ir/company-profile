@extends('frontend.layout')
@section('title', 'LAYANAN')
@section('content')
<div class="row">
    <div class="col-md-8 col-sm-8 col-xs-12 content">
        <br>
        <div class="content__judul">
            <h1>{{$layanan->nama_layanan}}</h1>
        </div>
        <br>
        <br>
        <div class="content__isi">
            {!! $layanan->deskripsi !!}
        </div>
        <br>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12 content__list content__list_warna">
        <h2 class="mt-5"><b>Layanan Lainnya</b></h2>
        @foreach($listLayanan as $item)
        <hr>
        <div class="service-item">
            <h3>{{$item->nama_layanan}}</h3>
            <p>{!! Str::limit($item->deskripsi, 100) !!}</p>
            <a href="/lihat-layanan/{{$item->id}}/{{Str::kebab($item->nama_layanan)}}">Selengkapnya...</a>
        </div>
        @endforeach
        <br>
    </div>
</div>
@endsection
{{-- @yield('content') --}}
