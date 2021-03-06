@extends('layouts.app')
@section('content')
<br><br>
    <div class="container">
    <div class= "justify-content-center">
    <h2>Carrito de compras:</h2>
    </div>
    </div>
<br><br>
    <section class="lista">
            <div class="row __max-width px-md-4">
                @foreach ($cart as $item)
                    @if($item->user->id == Auth::user()->id)
                        <hr>
                        <article class="col-12 text-center col-sm-6 text-sm-left text-md-left col-lg-3">
                            <a href="/products/specs/{{$item->product->id}}"><img src="/storage/{{$item->product->photopath}}" class="card-img" alt="{{$item->product->name}}"></a>
                        </article>
                        <article class="col-12 text-center col-sm-6 text-sm-left text-md-left col-lg-3">
                            <b>{{$item->product->name}}</b>
                        </article>
                        <article class="col-12 text-center col-sm-6 text-sm-left text-md-left col-lg-3">
                            <b>${{$item->product->amount}}</b>
                        </article>
                        <article class="col-12 text-center col-sm-6 text-sm-left text-md-left col-lg-3">
                            @if(Auth::check())
                                <b><a href="{{url("cart/remove/$item->id")}}">QUITAR DEL CARRITO</a></b> 
                            @endif
                        </article>
                    @endif
                @endforeach
            </section>
        <hr>
        <div class="container preciofinal">
        <div class= "monto">
        <h2>Monto final: ${{ $total }}</h2>
        </div>    
        </div>
        <br>
        <br>
    </section>
    @endsection