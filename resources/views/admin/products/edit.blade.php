@extends('admin.products.base')
@section('content')
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Produkty</h1>
  </div>

  <div class="row mb-3">
    <div class="col-5">
      <div class="card">
        <div class="card-body">
          
          <form action="{{ route('admin.products.update', $product->id) }}" method="post">
            @csrf
                <input type="hidden" name="_method" value="put">

                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Kategoria</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                              <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('category_id'))
                          <span class="text-danger">{{ $errors->first('category_id') }}</span>
                        @endif

                  </div>

                  <div class="form-group row">
                          <label for="name" class="col-sm-2 col-form-label">Nazwa</label>
                          <input type="name" name="name" class="form-control" id="name" placeholder="Nazwa" value="{{ $product->name }}">

                            @if ($errors->has('name'))
                              <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif

                  </div>

                  <div class="form-group row">
                          <label for="description" class="col-sm-2 col-form-label">Opis</label>
                          
                          <textarea class="form-control" name="description" id="description" cols="30" rows="5" placeholder="Opis">{{ $product->description }}</textarea>

                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif

                  </div>

                  <div class="form-group row">
                          <label for="price" class="col-sm-2 col-form-label">Cena</label>
                          <input type="number" name="price" class="form-control" id="price" min="0" value="{{ $product->price }}" >

                            @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif

                  </div>

                  <div class="form-group row">
                          <label for="amount" class="col-sm-2 col-form-label">Ilość</label>
                          <input type="number" name="amount" class="form-control" id="amount" min="1" value="{{ $product->amount }}" >

                            @if ($errors->has('amount'))
                                <span class="text-danger">{{ $errors->first('amount') }}</span>
                            @endif

                  </div>

                  <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
              
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
@section('footer')
  <!-- Footer -->
  <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
  @endsection