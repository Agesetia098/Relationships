@extends('admin.layout.app')

@section('title', 'Biodata')

@section('header', 'Biodata')

@section('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
        <li class="breadcrumb-item active">Biodata</li>
@endsection

@section('content')
@foreach ($sekolah as $item)
<div class="card mb-6" style="max-width: 740px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ url('/images_siswa/'.$item->image) }}" class="card-img" alt="..." style="width: 90%;height:auto%;padding-top: 7%;padding-left: 5%;">
    </div>
      <div class="col-md-6">
        <div class="card-body">
          <h3 class="">{{ $item->nis }}</h3>
          <h3 class="">{{ $item->name }}</h3>
          <h3 class="">{{ $item->class }}</h3>
          <h3 class="">{{ $item->npsn }}</h3>
          <a href="{{ route('admin.siswas.create') }}" class="btn btn text-success"><i class="fas fa-plus"></i> Tambah Nilai</a>
          {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
        </div>
      </div>
      <div class="col-md-1">
        <a href="" class="btn text-warning" style="padding-left: 90%"><i class="fas fa-pencil-alt"></i></a>
      </div>
      <div class="col-md-1">
        <a href="" class="btn text-danger" style="padding-left: 40%"><i class="fas fa-trash"></i></a>
      </div>
    </div>
  </div>
  @endforeach
  
@endsection
