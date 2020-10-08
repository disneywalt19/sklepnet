@extends('layouts.CategoryProductsLayout.header')
@extends('layouts.CategoryProductsLayout.navbar')

<section class="section-content bg padding-y">
    <div class="container">
        <main class="card">
            <div class="row no-gutters">
                <aside class="col-sm-6 border-right">
                    <article class="gallery-wrap">
                        <div class="img-big-wrap">

                            @if($product->photos()->count())
                                <a href="{{ asset('img/Products/' . $product->firstPhoto()->photo) }}" target="_blank">
                                    <img src="{{ asset('img/Products/' . $product->firstPhoto()->photo) }}">
                                </a>
                            @endif

                        </div>
                    </article>
                </aside>
                <aside class="col-sm-6">
                    <article class="card-body">
                        <h3 class="title mb-3">{{ $product->name }}</h3>

                        <div class="mb-3">
                            <var class="price h3 text-warning">
                                <span class="currency">US ${{ $product->price }}</span><span class="num"></span>
                            </var>
                        </div>
                        <dl>
                            <dt>Description</dt>
                            <dd>
                                <p> {{ $product->description }} </p>
                            </dd>
                        </dl>
                        <hr>
                        <form action="{{ route('products.add_to_cart', ['product' => $product->id]) }}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <dl class="dlist-inline">
                                        <dt>Quantity: </dt>
                                        <dd>
                                            <select name="amount" class="form-control form-control-sm" style="width:70px;">
                                                @for($i = 1; $i <= $product->amount; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-info">
                                        <i class="fas fa-cart-plus"></i>Dodaj do koszyka   
                                    </button>
                                </div>
                            </div>
                        </form>
                        <hr>
                    </article>
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
        </main>
    </div>
</section>
@extends('layouts.CategoryProductsLayout.footer')