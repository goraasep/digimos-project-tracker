@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1 class="mb-4">Welcome to My Laravel App</h1>
    <p>This is the homepage using the shared layout.</p>

    <div>USER: {{ $user }}</div>
    @role('admin')
        <p>This is for admins only.</p>
    @endrole
    @role('user')
        <p>This is for users only.</p>
    @endrole
    <button class="btn btn-primary">Tabler Button</button>
@endsection
