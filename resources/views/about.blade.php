@extends('layouts.app')
@section('content')
<section class="about-section section-padding" id="section_2">
                    <div class="section-overlay"></div>
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-lg-6 col-12">
                                <div class="ratio ratio-1x1">
                                    <video autoplay="" loop="" muted="" class="custom-video" poster="">
                                        <source src="videos/pexels-mike-jones-9046237.mp4" type="video/mp4">

                                        Your browser does not support the video tag.
                                    </video>

                                    <div class="about-video-info d-flex flex-column">
                                        <h4 class="mt-auto">Erlinda's Cafe</h4>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                                <em class="text-white">Erlinda's Cafe</em>

                                <h2 class="text-white mb-3">House of Authentic Biryani and Shawarma.</h2>

                                <p class="text-white">The café had been in the town for as long as anyone could remember, and it had become a beloved institution among the locals.</p>

                                <a href="#barista-team" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4">Meet Baristas</a>
                            </div>

                        </div>
                    </div>
                </section>
                @endsection