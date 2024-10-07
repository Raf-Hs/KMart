@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <img src="{{ $product->image }}" alt="{{ $product->name }}" />
    <p>{{ $product->description }}</p>
    <p>${{ $product->price }}</p>
    <p>{{ $product->availability ? 'Disponible' : 'No disponible' }}</p>

    <h2>Reseñas</h2>
    <!-- Aquí puedes agregar lógica para mostrar reseñas -->
@endsection
