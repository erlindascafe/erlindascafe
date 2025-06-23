@extends('layouts.app')
@section('content')


<section class="section-padding section-bg" id="menu-gallery">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center mb-5">
                <h3 class="text-white">Our Menu</h3>
            </div>

            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('images/menu2.jpg') }}" class="img-fluid rounded shadow" alt="Menu 1">
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('images/menu1.jpg') }}" class="img-fluid rounded shadow" alt="Menu 2">
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('images/menu5.jfif') }}" class="img-fluid rounded shadow" alt="Menu 3">
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('images/menu3.jpg') }}" class="img-fluid rounded shadow" alt="Menu 4">
            </div>
        </div>
    </div>
</section>
    @endsection