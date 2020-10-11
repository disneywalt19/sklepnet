@extends('layouts.CategoryProductsLayout.header')
@extends('layouts.navbar')

<section class="section-content bg padding-y">
    <div class="container">
        <div class="row MT-3">
            <div class="col-12">
                <h3>Ustawienia</h3>
            </div>
        </div>

        <main class="card MT-3" style="padding:30px;">

            <form action="{{ route('account.settings.update') }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="put">

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nazwa</label>
                        <div class="col-sm-10">
                            <input type="name" name="name" class="form-control" id="name" placeholder="Nazwa" value="{{ auth()->user()->name }}">
                                @if($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                        </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Hasło</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Hasło">
                                @if($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                        </div>
                </div>

                <div class="form-group row">
                    <label for="repeat_password" class="col-sm-2 col-form-label">Powtórz hasło</label>
                        <div class="col-sm-10">
                            <input type="password" name="repeat_password" class="form-control" id="repeat_password" placeholder="Powtórz hasło">
                                @if($errors->has('repeat_password'))
                                    <span class="text-danger">{{ $errors->first('repeat_password') }}</span>
                                @endif
                        </div>
                </div>

                <div class="form-group row">
                    <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
                </div>

            </form>
        </main>
    </div>
</section>