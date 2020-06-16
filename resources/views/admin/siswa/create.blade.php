@extends('admin.layout.app')

@section('title', 'Add Nilai')

@section('header', 'Add Nilai')

@section('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.siswas.index') }}"> Nilai </a></li>
        <li class="breadcrumb-item active">Create Nilai</li>
@endsection

@section('content')
    <form action="{{ route('admin.siswas.store') }}" method="POST" class="mb-2">
        @csrf
        <input type="text" name="nilai" class="form-control" />
        <br>
        <input type="text" name="keterangan" class="form-control" />
        <br>
        {{-- @error('tel')
            <span class="text-danger">{{ $message }}</span>
        @enderror --}}
      <button class="btn btn-primary" type="submit">
            Submit
        </button> 
        
    </form>
    <a href="{{ route('admin.siswas.index') }}" class="btn btn-danger">
       < back
    </a> 
@endsection