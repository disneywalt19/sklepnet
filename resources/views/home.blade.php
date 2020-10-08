@extends('layouts.header')
@extends('layouts.navbar')


<div class="container mb-5 mt-5">
    <p class="text-center">WELCOME IN ADMIN PANEL:<br> {{ Auth::user()->name }}</p>
</div>

@extends('layouts.footer')
