@extends('layouts.editor')

@section('title', 'Detail Layanan')

@section('content_header')
    <h1>{{ $service->title }}</h1>
@endsection

@section('content')
    <p>{!! nl2br(e($service->description)) !!}</p>
    <a href="{{ route('editor.service.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
