@extends('layouts.header')
@extends('layouts.navbar')
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

        <h1 class="my-4">Kategorie</h1>
        <div class="list-group categories">

          @foreach($categories as $category)
            <a href="{{ $category->id }}" class="list-group-item">{{$category->name}} <span class="float-right badge badge-light round">{{ $category->products_count }}</span></a>
          @endforeach

        </div>

      <h1 class="my-4">Cena</h1>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text">$</span>
          <span class="input-group-text">0.00</span>
        </div>
        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
    </div>

    <!-- Search field -->
  <!-- <div class="row mt-4 ml-1">
    <form action="{{ URL::to('/search')}}" method="GET" role="search">
    {{ csrf_field() }}
    <div class="input-group">
      <input type="text" class="form-control" name="query2" id="query" value="{{ request()->input('query2') }}" placeholder="Szukaj" ><span class="input-group-btn">
      <button type="submit" class="btn btn-outline-primary">Szukaj wg ceny</button>
        <span class="glyphicon glyphicon-search"></span>
      </button>
      </span>
    </div>
    </form>

  </div> -->

        <!-- <div class="list-group">
          <label for="customRange1">Cena "Od"</label>
          <input type="range" class="custom-range" min="0" max="5" id="customRange1">

          <label for="customRange2">Cena "Do"</label>
          <input type="range" class="custom-range" min="0" max="5" id="customRange2">
        </div> -->
        
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
          @foreach($products as $product)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">{{$product->name}}</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
          @endforeach

        </div>
        <!-- /.row -->
        <div class="row">

          <div class="col-md-12">

            <div class="card">
            {{ "Strona numer: " . $products->currentPage() }}
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

 @extends('layouts.footer')
