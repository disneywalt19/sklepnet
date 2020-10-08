@extends('layouts.CategoryProductsLayout.header')
@extends('layouts.CategoryProductsLayout.navbar')
  <!-- Page Content -->
<div class="container">
  
<!-- Search field -->
<div class="row mt-4 ml-1">
    <form action="{{ URL::to('/search')}}" method="GET" role="search">
    {{ csrf_field() }}
    <div class="input-group">
      <input type="text" class="form-control" name="query" id="query" value="{{ request()->input('query') }}" placeholder="Szukaj produktów"><span class="input-group-btn">
      <button type="submit" class="btn btn-outline-primary">Szukaj</button>
        <span class="glyphicon glyphicon-search"></span>
      </button>
      </span>
    </div>
    </form>

  </div>

    <div class="row">

      <div class="col-lg-3">
        <header class="card-header">
          <a href="#" data-toggle="collapse" data-target="#collapse33">
          <i class="icon-action fa fa-chevron-down"></i>
          <h6 class="title">Kategorie</h6>
        </header>
        
        <div class="card-body">

          @foreach($categories as $category)
            <a href="{{ URL::to('index', $category->id) }}" class="list-group-item">{{$category->name}} <span class="float-right badge badge-light round">{{ $category->products_count }}</span></a>
          @endforeach

        </div>

      <article class="card-group-item mt-3">
        <header class="card-header">
          <a href="#" data-toggle="collapse" data-target="#collapse33">
            <i class="icon-action fa fa-chevron-down"></i>
            <h6 class="title">Cena</h6>
          </a>
        </header>

        <div class="filter-content collapse show" id="collapse33">
          <div class="card-body">
            <form action="{{ route('index') }}" method="get">
              <div class="form-row">
                <div class="form-group col-md-6">
                <label>Od</label>
                <input name="from" class="form-control" placeholder="0 zł" min="0" type="number">
              </div>
              <div class="form-group text-right col-md-6">
                <label>Do</label>
                <input name="to" class="form-control" placeholder="100 zł" min="0" type="number">
                </div>
              </div>
              <button type="submit" class="btn btn-block btn-outline-primary">Szukj</button>
            </form>
          </div>
        </div>
      </article>  
  
    </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

    <div class="row">
          @foreach($categoryProducts as $product)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">{{$product->name}}</a>
                  </h4>
                  <h5>{{ $product->price . "$" }}</h5>
                  <p class="card-text">{{ $product->description }}</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> <button type="button" class="btn btn-success float-right">Buy!</button>
                </div>
              </div>
            </div>
          @endforeach

        </div>

     


        <!-- /.row -->
        <div class="row">

          <div class="col-md-12">

            <div class="card">
            {{ "Strona numer: " . $products->currentPage() . " z " . $products->lastPage() }}
              <div class="card-body">
              
                {{ $products->links() }}
               

              </div>

            </div>

          </div>
  
</div>
    </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->
    
  </div>
  <!-- /.container -->
@extends('layouts.CategoryProductsLayout.footer')
