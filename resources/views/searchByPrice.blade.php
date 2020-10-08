@extends('layouts.CategoryProductsLayout.header')
@extends('layouts.CategoryProductsLayout.navbar')
 
allllllllllllllllllllllllooooooooooooooooooooo

<div class="row">
          @foreach($priceFromTo as $productfromto)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">{{productfromto->name}}</a>
                  </h4>
                  <h5>{{ productfromto->price . "$" }}</h5>
                  <p class="card-text">{{ productfromto->description }}</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> <button type="button" class="btn btn-success float-right">Buy!</button>
                </div>
              </div>
            </div>
          @endforeach

        </div>

@extends('layouts.CategoryProductsLayout.footer')
