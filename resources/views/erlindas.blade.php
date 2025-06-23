@extends('layouts.app')
@section('content')
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-12 mx-auto">
                    <em class="small-text">welcome to</em>

                    <h2 class="font-dr-sugiyama text-white">Erlinda's Cafe</h2>
                    <p class="text-white mb-4 pb-lg-2">
                        House of Authentic Biryani and Shawarma.
                    </p>

                    <a class="btn custom-btn custom-border-btn smoothscroll me-3" href="{{ route('about.page') }}">
                        Our Story
                    </a>

                    <a class="btn custom-btn smoothscroll me-2 mb-2" href="{{ route('menu.page') }}"><strong>Check Menu</strong></a>
                </div>

            </div>
        </div>

        <div class="hero-slides"></div>
    </section>










   

    
@endsection
