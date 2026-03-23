@extends('admin.layouts.app')
@section('title', 'Criar novo usuário')

@section('content')
    <h1>Novo Usuário</h1>
    {{--@include('admin.includes.errors')--}}
    <form action="{{ route('users.store') }}" method="POST">
        @csrf()
        @include('admin.users.partials.form')
    </form>
@endsection
