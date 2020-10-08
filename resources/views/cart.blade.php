@extends('layouts.header')
@extends('layouts.navbar')

<div class="container">
    <div class="row">
        <main class="col-sm-9">
        @if($cart->count() >0)
            
                
                    <table class="table table-hover shopping-cart-wrap">
                        <thead class="text-muted">
                            <tr>
                                <th scope="col">Produkt</th>
                                <th scope="col" width="120">Ilość</th>
                                <th scope="col" width="120">Cena</th>
                                <th scope="col" class="text-right"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart as $item)
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">{{ $item->name }}</h6>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        {{$item->quantity}}
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">{{ $item->price }} $</var>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <form action="{{ route('cart.delete', ['product' => $item->id]) }}">
                                            @csrf
                                            <input type="hidden" value="DELETE" method="post" >
                                            <button class="btn btn-outline-danger">x Usuń</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-info">Brak produktów</div>
                @endif
            
        </main>
        <aside class="col-sm-3">
            <dl class="dlist-align h4">
                <dt>Ilość:</dt>
                <dd class="text-right">{{ $total_quantity }}
                <dt>Suma:</dt>
                <dd class="text-right"><strong>{{ $total }} $</strong></dd>
            </dl>
            
                <hr>

                    <form action="{{ route('orders.store') }}" method="post">
                    @csrf
                    <button class="btn btn-primary btn-block mb-3">Złóż zamówienie</button>
                    </form>

                
                
            
        </aside>
        @if(session('status'))
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-{{ session('status')['type'] }} text-center">
                                    {{ session('status')['content'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
    </div>


</div>










@extends('layouts.footer')