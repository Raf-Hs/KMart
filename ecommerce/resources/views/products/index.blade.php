@extends('layouts.app')

@section('content')
    <h1 class="text-center text-primary mb-4">Productos</h1>
    <div class="row justify-content-center">
        @foreach ($products as $product)
            <div class="col-md-3 mb-4"> <!-- Cambiar a col-md-3 para permitir 4 productos por fila y evitar el apilamiento -->
                <div class="card border-primary" style="border-radius: 15px; height: 100%;"> <!-- Ajustar la altura de las tarjetas -->
                    <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}" style="height: 250px; object-fit: cover; border-radius: 15px 15px 0 0;"> <!-- Aumentar la altura de la imagen -->
                    <div class="card-body d-flex flex-column"> <!-- Usar flexbox para ocupar el espacio disponible -->
                        <h5 class="card-title text-primary text-center">{{ $product->name }}</h5> <!-- Centrado del título -->
                        <p class="font-weight-bold text-success text-center my-2">${{ $product->price }}</p> <!-- Color verde para el precio y centrado -->
                        <div class="d-flex justify-content-between mt-auto">
                            <button class="btn btn-link text-success" style="font-size: 1.5rem;"><i class="fas fa-shopping-cart"></i></button> <!-- Ícono de carrito más grande -->
                            <button class="btn btn-link text-danger" style="font-size: 1.5rem;"><i class="fas fa-heart"></i></button> <!-- Ícono de corazón más grande -->
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
