@extends('admin.base')
@section('content')
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Produkty</h1>
  </div>

  <div class="row mb-3">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <table class="table">
            <thead>
              <th>Kategorie</th>
              <th>Nazwa</th>
              <th>Cena</th>
              <th>Ilość</th>
            </thead>
            <tbody>
              @foreach($products as $product)
                <tr>
                  <td>{{ $product->category->name }}</td>
                  <td>
                    <a href="{{ route('admin.products.edit', $product->id) }}">
                      {{ $product->name }}
                    </a>
                  </td>
                  <td>{{ $product->price }}</td>
                  <td>{{ $product->amount }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      {{ $products->links() }}
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