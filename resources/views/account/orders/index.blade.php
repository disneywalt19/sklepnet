@extends('layouts.CategoryProductsLayout.header')
@extends('layouts.navbar')

<section class="section-content bg padding-y">
    <div class="container">
        <div class="row MT-3">
            <div class="col-12">
                <h3>MOJE ZAMÓWIENIA</h3>
            </div>
        </div>

        <main class="card MT-3">
            <table class="table">
                <thead>
                    <th>Ilość produktów</th>
                    <th>Kwota</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->products->sum('amount') }}</td>
                            <td>{{ $order->price }} $</td>
                            <td>
                                    @if($order->isPaid())
                                        <div class="text-success">Zapłacone</div>
                                    @else
                                        <div class="text-info">Oczekujące</div>
                                    @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
</section> 