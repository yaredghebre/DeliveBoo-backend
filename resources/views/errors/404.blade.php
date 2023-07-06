@extends('layouts.app')

@section('content')
    <h2>Ops... Pagina non trovata</h2>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Torna alla Home</a>
@endsection
