@extends('layouts.app')
@section('content')
<section class="col-12 col-md-12 col-lg-12 row productos">
    @foreach ($products as $product)
        <article class="col-12 col-md-4 col-lg-4">
            <div class="card bg-light text-black">
            <a href="/products/specs/{{$product->id}}"><img src="/storage/{{$product->photopath}}" class="card-img" alt="{{$product->name}}"></a> {{$product->name}} <br> ${{$product->amount}}
                @if(Auth::check())
                    @if(auth()->user()->role == 3)
                        <a href="{{url("products/edit/$product->id")}}">EDITAR</a>
                        <a href="{{url("products/delete/$product->id")}}">BORRAR</a>
                    @endif
                    <a href="{{url("cart/add/$product->id")}}">AGREGAR A CARRITO</a>
                @endif
            </div>
        </article>
    @endforeach
</section>
@endsection