@extends('layouts.app')

@section('content')
    <h2>Ops... Non sei autorizzato ad accedere a questa pagina</h2>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Torna alla Home</a>
@endsection