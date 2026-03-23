@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')
<x-alert/>
@section('content')
    <h1>Detalhes do Usuário</h1>
    <ul>
        <li>Nome: {{ $user->name }}</li>
        <li>Nome: {{ $user->email }}</li>
    </ul>

    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Deletar</button>
    </form>
@endsection
