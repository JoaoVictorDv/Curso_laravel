@extends('admin.layouts.app')
@section('title', 'Editar o Usuário')

@section('content')
    <h1>Editar Usuário {{ $user->name }}</h1>

    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf()
        @method('put')
        @include('admin.users.partials.form')
    </form>
@endsection
