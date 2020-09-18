@extends('layouts.header')
@extends('layouts.navbar')
  <!-- Page Content -->
  <div class="container">
  
<!-- Search field -->
  <div class="row mt-4 ml-1">
    <form action="{{ URL::to('/search')}}" method="GET" role="search">
    {{ csrf_field() }}
    <div class="input-group">
      <input type="text" class="form-control" name="q" placeholder="Szukaj produktów"><span class="input-group-btn">
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
        <div class="list-group">

          @foreach($categories as $category)
            <a href="{{ $category->id }}" class="list-group-item">{{$category->name}}</a>
          @endforeach

        </div>

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
          <h1>Search Results</h1>
        </div>
        <!-- /.row -->

        <p>{{ $products->count() }} results for '{{ request()->input('query') }}'</p>

</div>
    </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->
    
  </div>
  <!-- /.container -->

 @extends('layouts.footer')
